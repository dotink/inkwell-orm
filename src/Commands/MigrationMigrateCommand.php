<?php namespace Inkwell\Propel\Command
{
	use Propel\Generator\Command as Propel;
	use Inkwell\Propel\ConfigInjector;

	class MigrationMigrateCommand extends Propel\MigrationMigrateCommand
	{
		use ConfigInjector;
	}
}
