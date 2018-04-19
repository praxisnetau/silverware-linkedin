<?php

/**
 * This file is part of SilverWare.
 *
 * PHP version >=5.6.0
 *
 * For full copyright and license information, please view the
 * LICENSE.md file that was distributed with this source code.
 *
 * @package SilverWare\LinkedIn\Extensions
 * @author Colin Tucker <colin@praxis.net.au>
 * @copyright 2018 Praxis Interactive
 * @license https://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 * @link https://github.com/praxisnetau/silverware-linkedin
 */

namespace SilverWare\LinkedIn\Extensions;

use SilverStripe\Forms\DropdownField;
use SilverStripe\Forms\FieldList;
use SilverStripe\SiteConfig\SiteConfig;
use SilverWare\Extensions\Config\ServicesConfig;
use SilverWare\Forms\FieldSection;

/**
 * An extension of the services config class which adds LinkedIn settings to site configuration.
 *
 * @package SilverWare\LinkedIn\Extensions
 * @author Colin Tucker <colin@praxis.net.au>
 * @copyright 2018 Praxis Interactive
 * @license https://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 * @link https://github.com/praxisnetau/silverware-linkedin
 */
class LinkedInConfig extends ServicesConfig
{
    /**
     * Maps field names to field types for this object.
     *
     * @var array
     * @config
     */
    private static $db = [
        'LinkedInLanguage' => 'Varchar(8)'
    ];
    
    /**
     * Updates the CMS fields of the extended object.
     *
     * @param FieldList $fields List of CMS fields from the extended object.
     *
     * @return void
     */
    public function updateCMSFields(FieldList $fields)
    {
        // Update Field Objects (from parent):
        
        parent::updateCMSFields($fields);
        
        // Create LinkedIn Tab:
        
        $fields->findOrMakeTab(
            'Root.SilverWare.Services.LinkedIn',
            $this->owner->fieldLabel('LinkedIn')
        );
        
        // Define Placeholder:
        
        $placeholder = _t(__CLASS__ . '.DROPDOWNDEFAULT', '(default)');
        
        // Create Field Objects:
        
        $fields->addFieldsToTab(
            'Root.SilverWare.Services.LinkedIn',
            [
                FieldSection::create(
                    'LinkedInConfig',
                    $this->owner->fieldLabel('LinkedInConfig'),
                    [
                        DropdownField::create(
                            'LinkedInLanguage',
                            $this->owner->fieldLabel('LinkedInLanguage'),
                            $this->owner->getLinkedInLanguageOptions()
                        )->setEmptyString(' ')->setAttribute('data-placeholder', $placeholder)
                    ]
                )
            ]
        );
    }
    
    /**
     * Updates the field labels of the extended object.
     *
     * @param array $labels Array of field labels from the extended object.
     *
     * @return void
     */
    public function updateFieldLabels(&$labels)
    {
        // Update Field Labels (from parent):
        
        parent::updateFieldLabels($labels);
        
        // Update Field Labels:
        
        $labels['LinkedInLanguage'] = _t(__CLASS__ . '.LANGUAGE', 'Language');
        $labels['LinkedIn'] = $labels['LinkedInConfig'] = _t(__CLASS__ . '.LINKEDIN', 'LinkedIn');
    }
    
    /**
     * Answers the HTML tag attributes for the body as an array.
     *
     * @return array
     */
    public function getBodyAttributes()
    {
        $attributes = [];
        
        if ($lang = SiteConfig::current_site_config()->LinkedInLanguage) {
            $attributes['data-linkedin-lang'] = $lang;
        }
        
        return $attributes;
    }
    
    /**
     * Answers an array of options for the language field.
     *
     * @return array
     */
    public function getLinkedInLanguageOptions()
    {
        return $this->owner->config()->linkedin_languages;
    }
}
