<?php

namespace EasyCorp\Bundle\EasyAdminBundle\Form\Type;

use Symfony\Component\Form\AbstractType;

/**
 * The 'panel' form type is a special form type used to display a design
 * element needed to create complex form layouts. This "fake" type only displays
 * some HTML tags and it must be added to a form as "unmapped" and "non required".
 *
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 *
 * @deprecated since 4.7.7, use EaFormFieldsetType instead
 */
class EaFormPanelType extends AbstractType
{
    public function getBlockPrefix(): string
    {
        return 'ea_form_panel';
    }
}
