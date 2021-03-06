<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'console.command.form_debug' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Console/Command/Command.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Command/DebugCommand.php';

$this->services['console.command.form_debug'] = $instance = new \Symfony\Component\Form\Command\DebugCommand(${($_ = isset($this->services['form.registry']) ? $this->services['form.registry'] : $this->load(__DIR__.'/getForm_RegistryService.php')) && false ?: '_'}, array(0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type', 1 => 'AppBundle\\Form\\Type', 2 => 'Symfony\\Bridge\\Doctrine\\Form\\Type', 3 => 'FOS\\UserBundle\\Form\\Type'), array(0 => 'AppBundle\\Form\\Type\\AddFileType', 1 => 'AppBundle\\Form\\Type\\CalculatorType', 2 => 'AppBundle\\Form\\Type\\CalendarFilterType', 3 => 'AppBundle\\Form\\Type\\CompanyType', 4 => 'AppBundle\\Form\\Type\\ContactType', 5 => 'AppBundle\\Form\\Type\\CostType', 6 => 'AppBundle\\Form\\Type\\ProposalEditType', 7 => 'AppBundle\\Form\\Type\\ProposalFilterType', 8 => 'AppBundle\\Form\\Type\\ProposalType', 9 => 'AppBundle\\Form\\Type\\ReportType', 10 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', 11 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType', 12 => 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType', 13 => 'FOS\\UserBundle\\Form\\Type\\UsernameFormType', 14 => 'FOS\\UserBundle\\Form\\Type\\ProfileFormType', 15 => 'FOS\\UserBundle\\Form\\Type\\RegistrationFormType', 16 => 'FOS\\UserBundle\\Form\\Type\\ChangePasswordFormType', 17 => 'FOS\\UserBundle\\Form\\Type\\ResettingFormType'), array(0 => 'Symfony\\Component\\Form\\Extension\\HttpFoundation\\Type\\FormTypeHttpFoundationExtension', 1 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\FormTypeValidatorExtension', 2 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\RepeatedTypeValidatorExtension', 3 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\SubmitTypeValidatorExtension', 4 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\UploadValidatorExtension', 5 => 'Symfony\\Component\\Form\\Extension\\Csrf\\Type\\FormTypeCsrfExtension'), array(0 => 'Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser', 1 => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser'));

$instance->setName('debug:form');

return $instance;
