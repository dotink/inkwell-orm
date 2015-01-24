<?php namespace Inkwell\Propel\Command
{
	use Propel\Generator\Command as Propel;
	use Inkwell\Propel\ConfigInjector;

	class ModelBuildCommand extends Propel\ModelBuildCommand
	{
		use ConfigInjector;
	}
}
