<?php namespace Inkwell\Propel\Command
{
	use Propel\Generator\Command as Propel;
	use Inkwell\Propel\ConfigInjector;

	class DatabaseReverseCommand extends Propel\DatabaseReverseCommand
	{
		use ConfigInjector;
	}
}
