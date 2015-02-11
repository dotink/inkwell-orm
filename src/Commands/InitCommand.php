<?php namespace Inkwell\Propel\Command
{
	use Propel\Generator\Command as Propel;
	use Inkwell\Propel\ConfigInjector;

	class InitCommand extends Propel\InitCommand
	{
		use ConfigInjector;
	}
}
