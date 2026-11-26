<?php
/**
 * Frothy Soap-Cloud & Animated Rising Bubble Divider Component
 * Organic cumulus soap foam silhouette with smoothly rising floating bubbles & micro-fizz
 * in A1 Cleaning's emerald/mint palette.
 */

if (!function_exists('renderA1MergeWave')) {
    /**
     * Render the frothy soap-cloud divider merging smoothly into the dark-emerald Footer.
     *
     * @param string $variant   'footer' (flipped above dark footer) or 'hero'
     * @param string $bgColor   Background color showing behind the rising bubble spray
     * @param bool   $darkAbove True when the section right above the footer is also dark (#0B2922 / #071914)
     */
    function renderA1MergeWave(string $variant = 'footer', string $bgColor = '#FFFFFF', bool $darkAbove = false): void
    {
        static $dividerIdx = 0;
        $dividerIdx++;

        $isFooter = ($variant === 'footer');
        $classes  = 'a1-merge-wave a1-foam-divider ' . ($isFooter ? 'is-footer-top' : 'is-hero-bottom');
        if ($isFooter && $darkAbove) {
            $classes .= ' is-dark-above';
        }

        $deepFill    = '#0B2922';
        $backFill    = ($isFooter && $darkAbove) ? '#1B6B53' : '#BCEAD3';
        $backOpacity = ($isFooter && $darkAbove) ? '0.68' : '0.78';
        $bubbleFill1 = ($isFooter && $darkAbove) ? '#35CC8A' : '#AEE7CA';
        $bubbleFill2 = ($isFooter && $darkAbove) ? '#86DDB3' : '#C9F0DD';
        $speckFill   = ($isFooter && $darkAbove) ? '#5DD59D' : '#86DDB3';

        // Organic cumulus foam billows forming uneven peaks & valleys along x=0..1440
        $cloudBillows = [
            [-8, 22, 42], [38, 28, 34], [76, 34, 24],
            [118, 30, 32], [156, 46, 36], [198, 42, 30], [234, 30, 24],
            [274, 24, 28], [316, 28, 32],
            [354, 42, 34], [392, 52, 32], [430, 38, 28], [468, 28, 24],
            [510, 26, 30], [552, 34, 34], [592, 44, 30], [630, 28, 26],
            [672, 26, 28], [714, 40, 36], [758, 48, 34], [800, 34, 26], [836, 24, 24],
            [878, 32, 34], [922, 50, 38], [966, 46, 32], [1008, 32, 26],
            [1048, 24, 28], [1092, 30, 32],
            [1134, 44, 34], [1174, 52, 30], [1214, 36, 26], [1252, 26, 24],
            [1296, 30, 32], [1342, 44, 36], [1386, 38, 30], [1428, 30, 34], [1458, 22, 32],
        ];

        // Soft secondary back froth puffs peeking softly behind peaks [cx, cy, r]
        $backFroth = [
            [148, 58, 28], [184, 54, 24], [372, 62, 28], [412, 58, 24],
            [576, 54, 26], [738, 60, 30], [778, 56, 24], [906, 62, 30],
            [948, 64, 28], [1156, 60, 26], [1192, 56, 22], [1360, 56, 28],
        ];

        // Effervescent rising soap bubbles above the foam [cx, cy, r, tone(1|2), opacity]
        $bubbles = [
            [42,   90,  7.5, 1, 0.72],
            [78,   114, 5.0, 2, 0.65],
            [104,  132, 9.5, 1, 0.76],
            [144,  98,  6.0, 2, 0.68],
            [188,  122, 11.0, 1, 0.78],
            [222,  88,  4.5, 2, 0.64],
            [258,  136, 7.0, 1, 0.66],
            [298,  104, 9.0, 2, 0.74],
            [336,  126, 5.5, 1, 0.66],
            [382,  110, 8.0, 1, 0.72],
            [424,  136, 10.5, 2, 0.70],
            [466,  92,  6.5, 1, 0.68],
            [506,  118, 8.5, 2, 0.74],
            [548,  96,  5.0, 1, 0.64],
            [594,  128, 11.5, 1, 0.78],
            [636,  102, 7.0, 2, 0.68],
            [676,  138, 8.0, 1, 0.66],
            [718,  98,  9.5, 2, 0.74],
            [764,  124, 6.0, 1, 0.68],
            [808,  108, 10.0, 1, 0.74],
            [852,  134, 5.5, 2, 0.62],
            [892,  100, 8.5, 1, 0.72],
            [938,  122, 12.0, 2, 0.76],
            [982,  98,  6.5, 1, 0.68],
            [1024, 132, 9.0, 1, 0.68],
            [1066, 106, 5.0, 2, 0.64],
            [1108, 126, 10.5, 1, 0.74],
            [1152, 100, 7.5, 2, 0.68],
            [1198, 136, 8.5, 1, 0.66],
            [1238, 108, 6.0, 2, 0.68],
            [1282, 124, 11.0, 1, 0.76],
            [1326, 96,  5.5, 2, 0.64],
            [1366, 130, 9.5, 1, 0.72],
            [1404, 108, 7.0, 2, 0.68],
            [1428, 138, 5.0, 1, 0.62],
        ];

        // Tiny pin-point fizz specks dispersing gently upward [cx, cy, r, opacity]
        $fizzSpecks = [
            [24, 80, 1.9, 0.68], [64, 128, 1.6, 0.56], [128, 114, 2.1, 0.65], [168, 142, 1.7, 0.52],
            [208, 110, 2.0, 0.66], [244, 116, 1.5, 0.58], [278, 130, 1.8, 0.54], [318, 86, 2.2, 0.68],
            [358, 140, 1.6, 0.52], [404, 100, 1.9, 0.66], [446, 114, 2.2, 0.65], [488, 134, 1.7, 0.54],
            [528, 106, 1.8, 0.62], [572, 142, 1.5, 0.50], [618, 88, 2.1, 0.68], [656, 120, 1.7, 0.60],
            [698, 116, 2.0, 0.64], [742, 140, 1.6, 0.52], [786, 90, 2.1, 0.68], [828, 122, 1.7, 0.60],
            [872, 114, 2.0, 0.64], [916, 144, 1.6, 0.50], [960, 110, 2.2, 0.66], [1004, 124, 1.7, 0.58],
            [1046, 94, 1.9, 0.66], [1088, 140, 1.5, 0.52], [1130, 112, 2.1, 0.64], [1174, 122, 1.7, 0.58],
            [1218, 90, 2.0, 0.68], [1260, 136, 1.6, 0.54], [1304, 106, 1.9, 0.64], [1346, 142, 1.6, 0.52],
            [1388, 94, 2.1, 0.66], [1418, 122, 1.7, 0.58],
        ];

        $styleAttr = $bgColor !== ''
            ? ' style="--a1-wave-bg: ' . htmlspecialchars($bgColor, ENT_QUOTES, 'UTF-8') . ';"'
            : '';
        ?>
<div class="<?= $classes ?>" aria-hidden="true"<?= $styleAttr ?>>
  <svg viewBox="0 0 1440 194" preserveAspectRatio="none" focusable="false">
    <!-- 1. Soft Back Soap-Froth Haze behind Tall Peaks (subtle breathe motion) -->
    <g class="a1-foam-breathe" fill="<?= $backFill ?>" fill-opacity="<?= $backOpacity ?>">
      <?php foreach ($backFroth as [$cx, $cy, $r]): ?>
        <circle cx="<?= $cx ?>" cy="<?= $cy ?>" r="<?= $r ?>"/>
      <?php endforeach; ?>
    </g>

    <!-- 2. Main Frothy Deep-Emerald Cumulus Cloud Base -->
    <g fill="<?= $deepFill ?>">
      <rect x="0" y="-4" width="1440" height="28"/>
      <?php foreach ($cloudBillows as [$cx, $cy, $r]): ?>
        <circle cx="<?= $cx ?>" cy="<?= $cy ?>" r="<?= $r ?>"/>
      <?php endforeach; ?>
    </g>

    <!-- 3. Rising Glossy Soap Bubbles with Continuous Floating Animation -->
    <g>
      <?php foreach ($bubbles as $idx => [$cx, $cy, $r, $tone, $op]):
        $fill  = ($tone === 1) ? $bubbleFill1 : $bubbleFill2;
        $dx    = (($idx % 2 === 0) ? 1 : -1) * (3 + ($idx % 4) * 1.4);
        $rise  = 24 + ($idx % 5) * 4;
        $dur   = number_format(4.2 + ($idx % 6) * 0.55, 2, '.', '');
        $delay = number_format(-0.35 - (($idx * 0.67) % 6.2), 2, '.', '');
      ?>
        <g class="a1-bubble-float" style="--float-x: <?= $dx ?>px; --float-rise: <?= $rise ?>px; --float-dur: <?= $dur ?>s; --float-delay: <?= $delay ?>s; --bubble-alpha: <?= $op ?>;">
          <circle cx="<?= $cx ?>" cy="<?= $cy ?>" r="<?= $r ?>" fill="<?= $fill ?>"/>
          <path d="M <?= round($cx - $r * 0.46, 1) ?> <?= round($cy + $r * 0.18, 1) ?> A <?= round($r * 0.55, 1) ?> <?= round($r * 0.55, 1) ?> 0 0 0 <?= round($cx + $r * 0.18, 1) ?> <?= round($cy + $r * 0.52, 1) ?>" fill="none" stroke="#FFFFFF" stroke-width="<?= ($r >= 8) ? '1.8' : '1.2' ?>" stroke-linecap="round" stroke-opacity="0.86"/>
          <circle cx="<?= round($cx + $r * 0.34, 1) ?>" cy="<?= round($cy + $r * 0.34, 1) ?>" r="<?= round(max(1.0, $r * 0.14), 1) ?>" fill="#FFFFFF" fill-opacity="0.8"/>
        </g>
      <?php endforeach; ?>
    </g>

    <!-- 4. Dispersing Fine Fizz Specks with Gentle Upward Drift -->
    <g fill="<?= $speckFill ?>">
      <?php foreach ($fizzSpecks as $idx => [$cx, $cy, $r, $op]):
        $dx    = (($idx % 2 === 0) ? -1 : 1) * (2.5 + ($idx % 3) * 1.3);
        $rise  = 22 + ($idx % 4) * 5;
        $dur   = number_format(3.6 + ($idx % 5) * 0.5, 2, '.', '');
        $delay = number_format(-0.2 - (($idx * 0.53) % 5.0), 2, '.', '');
      ?>
        <circle class="a1-bubble-float" cx="<?= $cx ?>" cy="<?= $cy ?>" r="<?= $r ?>" style="--float-x: <?= $dx ?>px; --float-rise: <?= $rise ?>px; --float-dur: <?= $dur ?>s; --float-delay: <?= $delay ?>s; --bubble-alpha: <?= $op ?>;"/>
      <?php endforeach; ?>
    </g>
  </svg>
</div>
        <?php
    }
}
