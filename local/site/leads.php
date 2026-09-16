<?php
/**
 * Private leads dashboard — shows every contact-form + call lead from
 * leads/leads.csv. Password-gated. This is the always-reliable backup:
 * even if the email service (FormSubmit) is down, every lead is here.
 */
session_start();
$PW = 'ParadiseLeads2026'; // change anytime; share only with the owner

if (isset($_POST['pw'])) {
  if (hash_equals($PW, (string) $_POST['pw'])) { $_SESSION['leads_ok'] = true; }
  else { $login_error = 'Wrong password.'; }
}
if (isset($_GET['logout'])) { $_SESSION['leads_ok'] = false; header('Location: leads.php'); exit; }

$authed = !empty($_SESSION['leads_ok']);
$csv = __DIR__ . '/leads/leads.csv';

// CSV download
if ($authed && isset($_GET['download']) && is_file($csv)) {
  header('Content-Type: text/csv');
  header('Content-Disposition: attachment; filename="paradise-leads.csv"');
  readfile($csv);
  exit;
}
?>
<!DOCTYPE html>
<html lang="en"><head>
<meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="noindex, nofollow">
<title>Paradise Leads</title>
<style>
  body{font-family:-apple-system,Segoe UI,Roboto,Arial,sans-serif;margin:0;background:#f4f1ea;color:#1c2a1f}
  header{background:#1C2A1F;color:#FBF8F1;padding:1rem 1.5rem;display:flex;justify-content:space-between;align-items:center}
  header h1{font-size:1.1rem;margin:0;letter-spacing:.04em}
  header a{color:#e6c282;text-decoration:none;font-size:.85rem}
  .wrap{max-width:1100px;margin:1.5rem auto;padding:0 1rem}
  .login{max-width:360px;margin:8vh auto;background:#fff;padding:2rem;border-radius:10px;box-shadow:0 12px 40px -16px rgba(0,0,0,.3)}
  .login h2{font-family:Georgia,serif;margin:0 0 1rem}
  input[type=password]{width:100%;padding:.7rem;border:1px solid #ccc;border-radius:6px;font-size:1rem;box-sizing:border-box}
  button{margin-top:.8rem;width:100%;padding:.7rem;background:#1C2A1F;color:#FBF8F1;border:0;border-radius:6px;font-size:1rem;cursor:pointer}
  .err{color:#b00;font-size:.85rem;margin-top:.5rem}
  table{width:100%;border-collapse:collapse;background:#fff;border-radius:10px;overflow:hidden;box-shadow:0 8px 30px -18px rgba(0,0,0,.3);font-size:.85rem}
  th,td{padding:.6rem .7rem;text-align:left;border-bottom:1px solid #eee;vertical-align:top}
  th{background:#1C2A1F;color:#FBF8F1;position:sticky;top:0;font-weight:600;letter-spacing:.03em}
  tr:hover td{background:#faf8f2}
  .toolbar{display:flex;gap:1rem;align-items:center;margin-bottom:1rem;flex-wrap:wrap}
  .btn{display:inline-block;padding:.5rem 1rem;background:#B58C45;color:#fff;border-radius:6px;text-decoration:none;font-size:.85rem}
  .count{font-size:.9rem;color:#555}
  .call{color:#888}
</style></head><body>
<?php if (!$authed): ?>
  <div class="login">
    <h2>Paradise Leads</h2>
    <form method="post">
      <input type="password" name="pw" placeholder="Password" autofocus required>
      <button type="submit">View leads</button>
      <?php if (!empty($login_error)): ?><div class="err"><?php echo htmlspecialchars($login_error); ?></div><?php endif; ?>
    </form>
  </div>
<?php else: ?>
  <header>
    <h1>Paradise Home Design — Leads</h1>
    <span><a href="?download=1">⬇ Download CSV</a> &nbsp;·&nbsp; <a href="?logout=1">Log out</a></span>
  </header>
  <div class="wrap">
  <?php
    if (!is_file($csv)) { echo '<p>No leads yet.</p>'; }
    else {
      $rows = array_map('str_getcsv', array_filter(file($csv, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES)));
      $head = array_shift($rows);
      $rows = array_reverse($rows); // newest first
      echo '<div class="toolbar"><span class="count">'.count($rows).' total leads</span><a class="btn" href="?download=1">Download spreadsheet</a></div>';
      echo '<div style="overflow-x:auto"><table><thead><tr>';
      foreach ($head as $h) echo '<th>'.htmlspecialchars(ucfirst($h)).'</th>';
      echo '</tr></thead><tbody>';
      foreach ($rows as $r) {
        $isCall = (isset($r[1]) && stripos($r[1], 'call') !== false);
        echo '<tr'.($isCall?' class="call"':'').'>';
        foreach ($head as $i => $h) echo '<td>'.nl2br(htmlspecialchars($r[$i] ?? '')).'</td>';
        echo '</tr>';
      }
      echo '</tbody></table></div>';
    }
  ?>
  </div>
<?php endif; ?>
</body></html>
