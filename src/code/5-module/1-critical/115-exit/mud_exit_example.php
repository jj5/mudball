<?php


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// 2021-02-27 jj5 - include dependencies...
//

require_once __DIR__ . '/../../../../host/dev/example.php';
require_once __DIR__ . '/mud_exit.php';


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// 2021-02-27 jj5 - declare examples...
//

declare_examples([


  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  // 2021-02-24 jj5 - fail
  //

  'fail' => function() {

    mud_expect_exit( MUD_EXIT_DEBUG );

    mud_exit( MUD_EXIT_DEBUG );

  },

]);
