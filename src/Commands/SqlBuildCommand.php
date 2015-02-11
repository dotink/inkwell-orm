<?php namespace Inkwell\Propel\Command
{
	use Propel\Generator\Command as Propel;
	use Inkwell\Propel\ConfigInjector;

	class SqlBuildCommand extends Propel\SqlBuildCommand
	{
		use ConfigInjector;
	}
}
