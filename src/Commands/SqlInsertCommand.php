<?php namespace Inkwell\Propel\Command
{
	use Propel\Generator\Command as Propel;
	use Inkwell\Propel\ConfigInjector;

	class SqlInsertCommand extends Propel\SqlInsertCommand
	{
		use ConfigInjector;
	}
}
