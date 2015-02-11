<?php namespace Inkwell\Propel\Command
{
	use Propel\Generator\Command as Propel;
	use Inkwell\Propel\ConfigInjector;

	class MigrationStatusCommand extends Propel\MigrationStatusCommand
	{
		use ConfigInjector;
	}
}
