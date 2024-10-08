<?php


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// 2024-07-30 jj5 - include dependencies...
//

require_once __DIR__ . '/../205-general/mud_general.php';


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// 2024-07-30 jj5 - module errors...
//

mud_define_error( 'MUD_ERR_STASH_CANNOT_CREATE_DIR', 'unable to create stash directory.' );


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// 2024-07-30 jj5 - include components...
//

require_once __DIR__ . '/2-class/MudStash.php';
require_once __DIR__ . '/2-class/MudModuleStash.php';


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// 2024-07-30 jj5 - functional interface...
//

function mud_get_stash( $name ) {

  return mud_module_stash()->get_stash( $name );

}


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// 2024-07-30 jj5 - service locator...
//
//

function mud_module_stash() : MudModuleStash {

  return mud_locator()->get_module( MudModuleStash::class );

}
