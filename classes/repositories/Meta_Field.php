<?php


namespace wobef\classes\repositories;

class Meta_Field
{
    private $meta_fields_option_name = "wobef_meta_fields";

    const TEXTINPUT = "textinput";
    const TEXTAREA = "textarea";
    const CHECKBOX = "checkbox";
    const RADIO = "radio";
    const ARRAY_TYPE = "array";
    const CALENDAR = "calendar";
    const EMAIL = "email";
    const PASSWORD = "password";
    const URL = "url";
    const IMAGE = "image";
    const FILE = "file";
    const EDITOR = "editor";
    const SELECT = "select";
    const TAXONOMY = "taxonomy";
    const COLOR = "color_picker";
    const DATE = "date_picker";
    const DATE_TIME = "date_time_picker";
    const TIME = "time_picker";

    const STRING_TYPE = "string";
    const NUMBER = "number";

    public static function get_fields_name_have_operator()
    {
        return [
            self::TEXTAREA,
            self::EDITOR,
            self::EMAIL,
            self::PASSWORD,
            self::URL,
            self::ARRAY_TYPE,
        ];
    }

    public static function get_main_types()
    {
        return [
            self::TEXTINPUT => esc_html__('TextInput', WOBEF_NAME),
            self::TEXTAREA => esc_html__('TextArea', WOBEF_NAME),
            self::CHECKBOX => esc_html__('Checkbox', WOBEF_NAME),
            self::RADIO => esc_html__('Radio', WOBEF_NAME),
            self::ARRAY_TYPE => esc_html__('Array', WOBEF_NAME),
            self::CALENDAR => esc_html__('Calendar', WOBEF_NAME),
            self::EMAIL => esc_html__('Email', WOBEF_NAME),
            self::PASSWORD => esc_html__('Password', WOBEF_NAME),
            self::URL => esc_html__('Url', WOBEF_NAME),
            self::IMAGE => esc_html__('Image', WOBEF_NAME),
            self::FILE => esc_html__('File', WOBEF_NAME),
            self::EDITOR => esc_html__('Editor', WOBEF_NAME),
            self::SELECT => esc_html__('Select', WOBEF_NAME),
        ];
    }

    public static function get_supported_acf_field_types()
    {
        return [
            'text',
            'textarea',
            'number',
            'checkbox',
            'radio',
            'email',
            'image',
            'file',
            'select',
            'wysiwyg',
            'password',
            'url',
            'taxonomy',
            'date_picker',
            'date_time_picker',
            'time_picker',
            'color_picker',
        ];
    }

    public static function get_sub_types()
    {
        return [
            self::STRING_TYPE => esc_html__('String', WOBEF_NAME),
            self::NUMBER => esc_html__('Number', WOBEF_NAME),
        ];
    }

    public function update(array $meta_fields)
    {
        return update_option($this->meta_fields_option_name, $meta_fields);
    }

    public function get()
    {
        $meta_fields = get_option($this->meta_fields_option_name);
        return !empty($meta_fields) ? $meta_fields : [];
    }
}
