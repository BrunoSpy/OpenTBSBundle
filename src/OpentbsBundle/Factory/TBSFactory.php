<?php
namespace OpentbsBundle\Factory;

use Interop\Container\ContainerInterface;
use Laminas\ServiceManager\Factory\FactoryInterface;

include_once(__DIR__ . '/../../lib/tbs_class.php');
include_once(__DIR__ . '/../../lib/tbs_plugin_opentbs.php');

/**
 * Class TBSFactory
 *
 * @author Lennart Schreiber <kontakt@webzap.eu>
 */
class TBSFactory extends \clsTinyButStrong implements FactoryInterface
{
    
    public function __construct()
    {
        // construct the TBS class
        parent::__construct();

        // load the OpenTBS plugin
        $this->Plugin(TBS_INSTALL, OPENTBS_PLUGIN);
    }
    
    /**
     * Create service
     *
     * @param ServiceLocatorInterface $serviceLocator
     * @return mixed
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        return $this;
    }
}
 