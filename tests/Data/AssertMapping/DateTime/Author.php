<?php

namespace Xcore\Generator\Tests\Data\AssertMapping\DateTime;

use Doctrine\ORM\Mapping as ORM;

/**
 * Author
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Author
{
    use AuthorTrait;

}

