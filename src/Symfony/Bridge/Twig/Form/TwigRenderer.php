<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Bridge\Twig\Form;

use Symfony\Component\Form\FormRenderer;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class TwigRenderer extends FormRenderer implements TwigRendererInterface
{
    public function __construct(TwigRendererEngineInterface $engine, $csrfTokenManager = null)
    {
        parent::__construct($engine, $csrfTokenManager);
    }

    /**
     * {@inheritdoc}
     *
     * @deprecated Deprecated in 2.8, to be removed in 3.0.
     */
    public function setEnvironment(\Twig_Environment $environment)
    {
    }
}
