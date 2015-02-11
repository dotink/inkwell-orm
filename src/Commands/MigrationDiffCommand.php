<?php namespace Inkwell\Propel\Command
{
	use Propel\Generator\Command as Propel;
	use Inkwell\Propel\ConfigInjector;

	class MigrationDiffCommand extends Propel\MigrationDiffCommand
	{
		use ConfigInjector;
	}
}
