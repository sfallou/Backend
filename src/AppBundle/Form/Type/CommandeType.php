<?php
namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
//use Symfony\Component\Form\Extension\Core\Type\EmailType;

class CommandeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        //$builder->add('dateCreation');
        $builder->add('id_article');
        $builder->add('qty_f1');
        $builder->add('montant_f1');
        $builder->add('qty_f2');
        $builder->add('montant_f2');
        //$builder->add('etat');
        //$builder->add('user');
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => 'AppBundle\Entity\Commande',
            'csrf_protection' => false
        ]);
    }
}