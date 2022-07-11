<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\DICOM;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PostDeformationMatrixRegistSeq extends AbstractTagGroup
{

  protected string $id = 'DICOM:PostDeformationMatrixRegistSeq';

  protected string $name = 'PostDeformationMatrixRegistSeq';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Post Deformation Matrix Regist Seq',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : DICOM::Main
       * line : 101473
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'DICOM::Main.DICOM:PostDeformationMatrixRegistSeq',
      'desc' => [
        'en' => 'Post Deformation Matrix Regist Seq',
      ],
    ],
  ];

}
