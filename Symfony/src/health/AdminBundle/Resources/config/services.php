<?php

use Symfony\Component\DependencyInjection\Definition;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\DependencyInjection\Parameter;

/*

$container->setDefinition(
    'health_admin.example',
    new Definition(
        'health\AdminBundle\Example',
        array(
            new Reference('service_id'),
            "plain_value",
            new Parameter('parameter_name'),
        )
    )
);

*/