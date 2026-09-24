<?php
ob_start(); session_start();
include_once("includes/config.php");
$cp_title = 'Kitchen & Bath Remodeling in Highwood, IL | Paradise Home Design';
$cp_meta_desc = 'Kitchen and bathroom remodeling in Highwood, IL. Lake Forest based design-build firm minutes away, North Shore experts. Call (847) 681-9000.';
$cp_canonical = 'highwood';
$cp_city_name = 'Highwood';
$cp_hero_image = BASEURL . 'flash/big/5.webp';
$cp_zip_codes = [
  '60040',
];
$cp_neighborhoods = [];
$cp_intro = [
  'Paradise Home Design remodels kitchens and bathrooms throughout Highwood, IL, working out of our showroom in Lake Forest just to the north, roughly a ten-minute drive away. Highwood is the smallest city on the North Shore, and it is built differently from its neighbors: narrow lots, older frame houses near the downtown restaurant district, and a growing share of townhomes and condos toward the Fort Sheridan side. We design and build remodels that fit those tighter footprints instead of forcing in a layout meant for a half-acre lot.',
  'Working in Highwood means working smart with space. Many kitchens here are galley or closed-off layouts in homes built before open-concept living, and the bathroom is often the single full bath a family shares. Over 37 years on the North Shore we have learned where a wall can come down, where plumbing can move without disturbing a neighbor\'s shared structure in an attached unit, and how to make a compact kitchen feel twice its size with the right cabinetry and counter run. Custom lines such as Adelphi and Quality Custom Cabinetry handle odd dimensions cleanly, while semi-custom lines like Fabuwood keep budgets in check.',
  'Because we are a true design-build firm, one team handles design, product selection, permitting with the City of Highwood Building Department, and construction. You are not handing off between a designer, a cabinet showroom, and a separate contractor. Call (847) 681-9000 for a free consultation and a written estimate.',
];
$cp_extra_html = '<h3>Designing around Highwood\'s homes and condos</h3><p>Highwood\'s housing stock is unusually varied for its size. Close to the downtown restaurant district you will find compact early-twentieth-century frame homes with their original closed-off kitchens and a single full bath, while the streets toward Fort Sheridan add townhomes and condominiums where layouts are fixed and shared walls limit where plumbing and gas lines can run. We design with those constraints in mind rather than fighting them: reworking a galley into a more open work zone, carving usable storage out of tight corners with custom and semi-custom cabinetry, and specifying quartz or natural-stone counters that suit a smaller run without looking sparse. For condo and townhome owners we also coordinate the practical details, like staging materials when there is no driveway and protecting shared hallways during demolition.</p>';
$cp_reasons = [
  ['title' => 'We build for Highwood\'s smaller lots.', 'body' => 'Highwood\'s narrow lots, older frame homes near downtown, and Fort Sheridan-area townhomes and condos call for tight, efficient layouts. After 37 years on the North Shore we know how to open a galley kitchen or reconfigure a single shared bath without wasting an inch.'],
  ['title' => 'We know the Highwood permit office.', 'body' => 'We pull permits directly with the City of Highwood Building Department and coordinate every inspection ourselves. Handling the paperwork in-house keeps approvals moving and your remodel on schedule.'],
  ['title' => 'Minutes from our Lake Forest showroom.', 'body' => 'Our base is in Lake Forest, just north of Highwood and about a ten-minute drive, so site visits, measurements, and punch-list fixes happen quickly. You get an owner-led team that is genuinely nearby, not a crew driving in from the city.'],
];
$faqs = [
  ['q' => 'How much does a kitchen or bath remodel cost in Highwood, IL?', 'a' => 'Most full kitchen and bathroom remodels in Highwood range from about $40,000 to $90,000+, depending on size, cabinetry, countertops, and whether walls are moved. Highwood\'s smaller homes and condo units often land toward the lower end of that band. We provide a detailed written estimate after a free consultation — call (847) 681-9000.'],
  ['q' => 'Do you pull permits with the City of Highwood Building Department?', 'a' => 'Yes. As a design-build remodeler we pull all required permits with the City of Highwood Building Department and coordinate inspections, so your Highwood kitchen or bath remodel stays compliant and on schedule.'],
  ['q' => 'How long does a Highwood kitchen or bath remodel take?', 'a' => 'A bathroom remodel typically takes three to five weeks, and a full kitchen runs roughly eight to twelve weeks once permits are issued and materials arrive. Compact Highwood layouts can move faster, while jobs that relocate plumbing or take down a wall take longer. We give you a realistic schedule in your written estimate before work begins.'],
  ['q' => 'Do you handle both the design and the construction?', 'a' => 'Yes. We are a design-build firm with an in-house design team, so one accountable team takes you from concept and product selection through permitting, construction, and final installation. You do not need to hire a separate designer or general contractor.'],
  ['q' => 'How do I get started on a Highwood remodel?', 'a' => 'Call (847) 681-9000 or request a consultation on our website. We are about ten minutes from Highwood, respond within one business day, and provide a written estimate before any work begins.'],
];
// 2026-09-24: shared stock photos carry NO town label; only photos really from this town get one.
$cp_projects_eyebrow = 'Recent work';
$cp_projects_heading = 'Kitchens we\'ve designed.';
$cp_projects = [
  ['img' => BASEURL.'flash/big/5.webp', 'title' => 'White kitchen, oversized island', 'location' => ''],
  ['img' => BASEURL.'flash/big/1.webp', 'title' => 'Navy lower cabinets, subway tile', 'location' => ''],
  ['img' => BASEURL.'flash/big/7.webp', 'title' => 'Traditional cherry kitchen', 'location' => ''],
  ['img' => BASEURL.'flash/big/2.webp', 'title' => 'Black cabinets, marble, brass', 'location' => ''],
  ['img' => BASEURL.'indexpage/big/1_1.webp', 'title' => 'White galley kitchen, hardwood', 'location' => ''],
  ['img' => BASEURL.'flash/big/3.webp', 'title' => 'White kitchen, powder-blue island', 'location' => ''],
];
include "includes/components/city_page.php";
?>
