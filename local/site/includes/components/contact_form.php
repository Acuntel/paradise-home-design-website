<?php
/**
 * Contact form, posts to contactmail.php (preserve legacy handler).
 */
$baseurl = defined('BASEURL') ? BASEURL : '/';
?>
<form class="pd-form" action="<?php echo $baseurl; ?>contactmail.php" method="post" data-reveal>
  <!-- Honeypot: hidden from humans; bots fill it and get rejected. -->
  <input type="text" name="_gotcha" tabindex="-1" autocomplete="off" aria-hidden="true" style="position:absolute;left:-9999px;width:1px;height:1px;opacity:0">
  <div>
    <label for="cf-name">Name</label>
    <input id="cf-name" type="text" name="name" required autocomplete="name">
  </div>
  <div class="pd-grid pd-grid-2">
    <div>
      <label for="cf-email">Email</label>
      <input id="cf-email" type="email" name="email" required autocomplete="email">
    </div>
    <div>
      <label for="cf-phone">Phone</label>
      <input id="cf-phone" type="tel" name="phone" autocomplete="tel">
    </div>
  </div>
  <div class="pd-grid pd-grid-2">
    <div>
      <label for="cf-project">Project type</label>
      <select id="cf-project" name="project_type">
        <option value="">Select…</option>
        <option>Kitchen remodel</option>
        <option>Bathroom remodel</option>
        <option>Countertops</option>
        <option>Full home / multiple rooms</option>
        <option>Other</option>
      </select>
    </div>
    <div>
      <label for="cf-timeline">Timeline</label>
      <select id="cf-timeline" name="timeline">
        <option value="">Select…</option>
        <option>Within 1 month</option>
        <option>1–3 months</option>
        <option>3–6 months</option>
        <option>Just exploring</option>
      </select>
    </div>
  </div>
  <div>
    <label for="cf-msg">Tell us about your project</label>
    <textarea id="cf-msg" name="comments" rows="4"></textarea>
  </div>
  <button class="btn btn-primary" type="submit">Send message</button>
  <p class="small" style="color:var(--paradise-stone-500);margin-top:.5rem">We respond within one business day. No spam, no high-pressure sales.</p>
</form>
