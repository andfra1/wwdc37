<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="theme-color" content="#bc2e3a">
  <link rel="stylesheet" href="dist/css/owl.carousel.min.css">
  <link rel="stylesheet" href="dist/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="dist/css/main.css">
  <title>WWDC37 - Franciszek Andruszkiewicz</title>
</head>

<?php
/*content here!*/
$data = 
[
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
    'section2' => 'What we do',
    'section3' => 'How we works',
    'section4' => 'Our creative team',
    'section5' => 'What client says',
    'section6' => 'Get in touch',
  ],
  'button' => 'read more',
  'section1' => [
    'content' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.'],
  'section2' => [
    'Creative Work' => [
      'icon' => 'svg',
      'data' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.'
    ],
    'We do Best' => [
      'icon' => 'svg',
      'data' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.'
    ],
    'Best Company' => [
      'icon' => 'svg',
      'data' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.'
    ],
    'Nice Idea' => [
      'icon' => 'svg',
      'data' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.'
    ],
    'Professional' => [
      'icon' => 'svg',
      'data' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.'
    ],
    'Great Services' => [
      'icon' => 'svg',
      'data' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.'
    ]
  ],
  'section3' => [
    'content' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.',
    'items' => [
      'item1' => [
        'name' => 'idea',
        'text' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem.'
      ],
      'item2' => [
        'name' => 'design',
        'text' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem.'
      ],
      'item3' => [
        'name' => 'output',
        'text' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem.'
      ]
    ]
  ],
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
$box = $data['section2'];
$section1 = $data['section1'];
$section3 = $data['section3'];
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
                  <li class="menu__item">
                    <a href="#" class="menu__itemLink">
                      [fb]
                    </a>
                  </li>
            </ul>
          </nav>
        </div>
      </div>
    </header>
    <main>
      <section class="section section--firstBg">
        <div class="intro">
          <img src="img/skate.png" alt="skate" class="intro__image">
          <a href="#" class="btn" data-text="<?= $button; ?>">
            <?= $button; ?>
          </a>
        </div>
      </section>
      <section class="section section--overflowHidden">
        <div class="wrapper">
          <div class="content category1">
            <div class="content__item">
              <h1>
                <?= $header['section1']; ?>
              </h1>
              <p>
              <?= $section1['content']; ?>
              </p>
              <a href="#" class="btn btn--warn" data-text="<?= $button; ?>">
                <?= $button; ?>
              </a>
            </div>
            <div class="content__item">
              <img src="img/pc.png" alt="pc" class="content__itemImage imageSection1">
            </div>

          </div>
        </div>
      </section>
      <section class="section">
        <div class="wrapper">
          <div class="content category2">
            <h1>
              <?= $header['section2']; ?>
            </h1>
            <div class="box">
              <?php
            foreach( $box as $key => $val ) :
          ?>
                <div class="box__item">
                  <div class="box__itemIcon">
                    <?= $val['icon'] ?>
                  </div>
                  <div class="box__itemName">
                    <?= $key ?>
                  </div>
                  <div class="box__itemData">
                    <?= $val['data'] ?>
                  </div>
                </div>
                <?php
            endforeach;
          ?>
            </div>
          </div>
        </div>
      </section>

      <section class="section section--overflowHidden">
        <div class="wrapper">
          <div class="content category3">
            <h1>
              <?= $header['section3']; ?>
            </h1>
            <div class="howWeWorks">
              <div class="howWeWorks__item">
                <p>
                  <?= $section3['content']; ?>
                </p>
                <a href="#" class="btn btn--warn" data-text="<?= $button; ?>">
                  <?= $button; ?>
                </a>
              </div>
              <div class="howWeWorks__item">
                <div class="diamond">
                  <?php
                    $s3Items = $section3['items'];
                    foreach ( $s3Items as $key => $value ) :
                  ?>
                  <div class="diamond__item">
                    <div class="diamond__itemContent">
                      <h2>
                        <?= $value['name']?>
                      </h2>
                      <p>
                      <?= $value['text']?>
                      </p>
                    </div>
                  </div>
                  <?php
                    endforeach;
                  ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section">
        <div class="wrapper">
          <div class="content category4">
            <h1>
              <?= $header['section4']; ?>
            </h1>
            <div class="team">
              <div class="team__item">
                <div class="team__itemBox">
                  <div class="team__itemBoxImg">
                    <img src="img/person.jpg" alt="">
                  </div>
                </div>
                <div class="team__itemName">
                    <span>Jimmy Doe</span>
                    <div class="team__itemNamePosition">
                      twój stary
                    </div>
                  </div>
              </div>
              <div class="team__item">
                <div class="team__itemBox">
                  <div class="team__itemBoxImg">
                    <img src="img/person.jpg" alt="">
                  </div>
                </div>
                <div class="team__itemName">
                    <span>Jimmy Doe</span>
                    <div class="team__itemNamePosition">
                      twój stary
                    </div>
                  </div>
              </div>
              <div class="team__item">
                <div class="team__itemBox">
                  <div class="team__itemBoxImg">
                    <img src="img/person.jpg" alt="">
                  </div>
                </div>
                <div class="team__itemName">
                    <span>Jimmy Doe</span>
                    <div class="team__itemNamePosition">
                      twój stary
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section">
        <div class="wrapper">
          <div class="content category5">
            <h1>
              <?= $header['section5']; ?>
            </h1>
          </div>
        </div>
      </section>
    </main>
    <section class="section section--footer">
      <div class="wrapper">
        <div class="content category6">
          <h1>
            <?= $header['section6']; ?>
          </h1>
          <div class="box">
            <?php
            foreach( $contact as $key => $val ) :
          ?>
              <div class="box__item">
                <div class="box__itemIcon">
                  <?= $val['icon'] ?>
                </div>
                <div class="box__itemName">
                  <?= $key ?>
                </div>
                <div class="box__itemData">
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

<script src="dist/js/jquery-3.3.1.min.js"></script>
<script src="dist/js/owl.carousel.min.js"></script>
<script src="dist/js/main.js"></script>

  </body>

</html>