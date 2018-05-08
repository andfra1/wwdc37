<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="theme-color" content="HEXadecimal color here">
  <link rel="stylesheet" href="dist/css/main.css">
  <title>WWDC37 - Franciszek Andruszkiewicz</title>
</head>

<?php
/*content here!*/
$data = [
  'menu' => [
    'HOME',
    'ABOUT US',
    'TEAM',
    'SERVICE',
    'PROCESSES',
    'CLIENTS',
    'WORK'
  ],
  'header' => [
    'section1' => 'Who we are',
    'section2' => 'Wat we do',
    'section3' => 'How we works',
    'section4' => 'Our creative team',
    'section5' => 'What client says',
    'section6' => 'Get in touch',
  ],
  'button' => 'read more',
  'contact' => [
    'email' => [
      'icon' => 'svg',
      'data' => [
        '<a href="mailto:free@psdfreebies.com">free@psdfreebies.com</a>',
        '<a href="mailto:free@psdfreebies.com">free@psdfreebies.com</a>'
      ]
    ],
    'phone' => [
      'icon' => 'svg',
      'data' => [
        '<a href="tel:+123 456 7890">+123 456 7890</a>',
        '<a href="tel:+123 456 7890">+123 456 7890</a>'
      ]
    ],
    'office' => [
      'icon' => 'svg',
      'data' => [
        '<span>123, Main Road, New City</span>',
        '<span>My Country 123456</span>'
      ]
    ]


  ]
];

$header = $data['header'];
$menu = $data['menu'];
$button = $data['button'];
$contact = $data['contact'];
?>


  <body>
    <header>
      <div class="wrapper">
        <div class="content">
          <div class="logo">
            Agency
          </div>
          <nav>
            <ul class="menu">
              <?php
              foreach($menu as $key) :
            ?>
                <li class="menu__item">
                  <a href="#" class="menu__itemLink">
                    <?= $key; ?>
                  </a>
                </li>
                <?php
              endforeach;
            ?>
                  <li class="menu__item">
                    <a href="#" class="menu__itemLink">
                      [search]
                    </a>
                  </li>
            </ul>
          </nav>
        </div>
      </div>
    </header>
    <main>
      <section class="section section--firstBg">
        <div class="wrapper">
          <div class="content">
            <div class="intro">
              <h1 class="intro__header">
                skejcik
              </h1>
              <a href="#" class="btn" data-text="<?= $button; ?>">
                <?= $button; ?>
              </a>
            </div>
          </div>
        </div>
      </section>
      <section class="section">
        <div class="wrapper">
          <div class="content category1">
            <h1 class="header category1__header">
              <?= $header['section1']; ?>
            </h1>
            <p>
              Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque
              ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
            </p>
            <a href="#" class="btn btn--warn" data-text="<?= $button; ?>">
              <?= $button; ?>
            </a>
          </div>
        </div>
      </section>
      <section class="section">
        <div class="wrapper">
          <div class="content category2">
            <h1 class="header category2__header">
              <?= $header['section2']; ?>
            </h1>
          </div>
        </div>
      </section>
      <section class="section">
        <div class="wrapper">
          <div class="content category3">
            <h1 class="header category3__header">
              <?= $header['section3']; ?>
            </h1>
          </div>
        </div>
      </section>
      <section class="section">
        <div class="wrapper">
          <div class="content category4">
            <h1 class="header category4__header">
              <?= $header['section4']; ?>
            </h1>
          </div>
        </div>
      </section>
      <section class="section">
        <div class="wrapper">
          <div class="content category5">
            <h1 class="header category5__header">
              <?= $header['section5']; ?>
            </h1>
          </div>
        </div>
      </section>
    </main>
    <section class="section">
      <div class="wrapper">
        <div class="content category6">
          <h1 class="header category6__header">
            <?= $header['section6']; ?>
          </h1>
          <div class="contact">
            <?php
            foreach( $contact as $key => $val ) :
          ?>
              <div class="contact__item">
                <div class="contact__itemIcon">
                  <?= $val['icon'] ?>
                </div>
                <div class="contact__itemName">
                  <?= $key ?>
                </div>
                <div class="contact__itemData">
                  <?php
                foreach( $val['data'] as $content => $value ) {
                  echo $value;
                }
              ?>
                </div>
              </div>
              <?php
            endforeach;
          ?>
          </div>
        </div>
      </div>
    </section>
  </body>

</html>