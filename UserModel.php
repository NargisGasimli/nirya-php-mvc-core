<?php

namespace Nirya\PhpMvcCore\;
use Nirya\PhpMvcCore\\db\DbModel;

abstract class UserModel extends DbModel {
    abstract public function getDisplayName(): string;

}