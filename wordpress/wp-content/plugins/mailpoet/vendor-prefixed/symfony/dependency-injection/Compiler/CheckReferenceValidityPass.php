<?php
 namespace MailPoetVendor\Symfony\Component\DependencyInjection\Compiler; if (!defined('ABSPATH')) exit; use MailPoetVendor\Symfony\Component\DependencyInjection\Definition; use MailPoetVendor\Symfony\Component\DependencyInjection\Exception\RuntimeException; use MailPoetVendor\Symfony\Component\DependencyInjection\Reference; class CheckReferenceValidityPass extends \MailPoetVendor\Symfony\Component\DependencyInjection\Compiler\AbstractRecursivePass { protected function processValue($value, $isRoot = \false) { if ($isRoot && $value instanceof \MailPoetVendor\Symfony\Component\DependencyInjection\Definition && ($value->isSynthetic() || $value->isAbstract())) { return $value; } if ($value instanceof \MailPoetVendor\Symfony\Component\DependencyInjection\Reference && $this->container->hasDefinition((string) $value)) { $targetDefinition = $this->container->getDefinition((string) $value); if ($targetDefinition->isAbstract()) { throw new \MailPoetVendor\Symfony\Component\DependencyInjection\Exception\RuntimeException(\sprintf('The definition "%s" has a reference to an abstract definition "%s". Abstract definitions cannot be the target of references.', $this->currentId, $value)); } } return parent::processValue($value, $isRoot); } } 