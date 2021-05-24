<?php
 namespace MailPoetVendor\Symfony\Component\Validator\Mapping\Loader; if (!defined('ABSPATH')) exit; use MailPoetVendor\Symfony\Component\Validator\Constraint; use MailPoetVendor\Symfony\Component\Validator\Exception\MappingException; abstract class AbstractLoader implements \MailPoetVendor\Symfony\Component\Validator\Mapping\Loader\LoaderInterface { const DEFAULT_NAMESPACE = '\\Symfony\\Component\\Validator\\Constraints\\'; protected $namespaces = []; protected function addNamespaceAlias($alias, $namespace) { $this->namespaces[$alias] = $namespace; } protected function newConstraint($name, $options = null) { if (\false !== \strpos($name, '\\') && \class_exists($name)) { $className = (string) $name; } elseif (\false !== \strpos($name, ':')) { list($prefix, $className) = \explode(':', $name, 2); if (!isset($this->namespaces[$prefix])) { throw new \MailPoetVendor\Symfony\Component\Validator\Exception\MappingException(\sprintf('Undefined namespace prefix "%s".', $prefix)); } $className = $this->namespaces[$prefix] . $className; } else { $className = self::DEFAULT_NAMESPACE . $name; } return new $className($options); } } 