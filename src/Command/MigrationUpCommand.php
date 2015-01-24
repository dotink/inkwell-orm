<?php namespace Inkwell\Propel\Command
{
	use Propel\Generator\Command as Propel;
	use Inkwell\Propel\ConfigInjector;

	class MigrationUpCommand extends Propel\MigrationUpCommand
	{
		use ConfigInjector;
	}
}
