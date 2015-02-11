<?php namespace Inkwell\Propel\Command
{
	use Propel\Generator\Command as Propel;
	use Inkwell\Propel\ConfigInjector;

	class MigrationDownCommand extends Propel\MigrationDownCommand
	{
		use ConfigInjector;
	}
}
