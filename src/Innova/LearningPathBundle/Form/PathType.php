<?php

namespace Innova\LearningPathBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * Class PathType
 *
 * @package Innova\LearningPathBundle\Form
 */
class PathType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('description')
            ->add('isPattern');
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Innova\LearningPathBundle\Entity\Path'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'innova_learningpathbundle_pathtype';
    }
}
