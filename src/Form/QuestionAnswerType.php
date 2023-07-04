<?php

namespace App\Form;

use App\Entity\QuestionAnswer;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;

class QuestionAnswerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'ФИО',
            ])
            ->add('email', EmailType::class,[
                'label'=> 'Эл. Почта'
            ])
            ->add('phone', TextType::class,[
                'label'=> 'Контактный телефон'
            ])
            ->add('text_question',TextareaType::class,[
                'label'=> 'Текст вопроса',
                'attr' => [
                    'style' => 'resize: none;', // Отключает растягивание текстового поля
                ],
            ])
            ->add('file',FileType::class,[
                'label' => 'Вы можете прикрепить к сообщению один файл (текст, изображение, видео, аудио), объемом не больше 5Мб.',
                'required' => false,
                'mapped' => false,
                // 'attr' => [
                //     'base_path' => '/assets/upload/files/',
                //     'upload_dir' => '/assets/upload/files/',
                // ],
                'constraints' => [
                    new File([
                        'maxSize' => '5M',
                    ])
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => QuestionAnswer::class,
        ]);
    }
}
