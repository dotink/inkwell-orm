<?php namespace Inkwell\Propel
{
	use Propel\Generator\Config\GeneratorConfig;
	use Symfony\Component\Console\Input\InputInterface;

	trait ConfigInjector
	{
		/**
		 * Injected configuration properties
		 *
		 * @access private
		 * @var array
		 */
		private $configProperties = array();


		/**
		 * Allows for injecting configuration properties
		 *
		 * @access public
		 * @see http://propelorm.org/documentation/10-configuration.html#php
		 * @param array $properties The configuration properties
		 * @return void
		 */
		public function setConfigProperties(Array $properties)
		{
			$this->configProperties = $properties;
		}


	    /**
	     * Returns a new `GeneratorConfig` object with your `$properties` merged with the
	     * injected configuration properties and those loaded in the `config-dir` folder.
	     *
	     * @param array $properties Properties to add to the configuration. They usually come from command line.
	     * @param InputInterface $input
	     * @return GeneratorConfig
	     */
	    protected function getGeneratorConfig(array $properties = null, InputInterface $input = null)
	    {
			return parent::getGeneratorConfig(array_merge_recursive(
				$this->configProperties,
				$properties
			));
	    }
	}
}
