<?php

namespace Umbrella\CoreBundle\DataTable\Adapter;

use Symfony\Component\OptionsResolver\OptionsResolver;
use Umbrella\CoreBundle\DataTable\DTO\DataTableResult;
use Umbrella\CoreBundle\DataTable\DTO\DataTableState;

/**
 * Class DataTableAdapter
 */
abstract class DataTableAdapter
{
    public function configureOptions(OptionsResolver $resolver)
    {
    }

    /**
     * @throws AdapterException
     */
    abstract public function getResult(DataTableState $state, array $options): DataTableResult;
}
