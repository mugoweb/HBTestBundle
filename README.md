Copy the Mugo folder to src/

To enable the bundle edit:

ezpublish/EzPublishKernel.php

...
    public function registerBundles()
    {
        $bundles = array(
            ...
            new Mugo\HBTestBundle\MugoHBTestBundle(),
        );

ezpublish/config/routing.yml

mugo_hb_test:
    resource: "@MugoHBTestBundle/Resources/config/routing.yml"
    prefix:   /


ezpublish/config/config.yml

# Assetic Configuration
assetic:
    ...
    bundles:        [ ..., MugoHBTestBundle ]

Then clear the cache and regenerate autoloads.

You can access the testing page at:


/hbtest

The ajax url is /hbtest/ajax
