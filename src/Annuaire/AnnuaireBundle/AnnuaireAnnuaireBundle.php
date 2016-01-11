<?php

namespace Annuaire\AnnuaireBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class AnnuaireAnnuaireBundle extends Bundle {

    public function getParent() {
        return 'FOSUserBundle';
    }

}
