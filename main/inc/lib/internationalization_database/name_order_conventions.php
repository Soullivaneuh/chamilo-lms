<?php
/* For licensing terms, see /license.txt */
/**
 * @package chamilo.include.internationalization
 */
/**
 * The following table contains two types of conventions concerning person names:
 *
 * "format" - determines how a full person name to be formatted, i.e. in what order the title, the first_name and the last_name to be placed.
 * You might need to correct the value for your language. The possible values are:
 * title first_name last_name  - Western order;
 * title last_name first_name  - Eastern order;
 * title last_name, first_name - Western libraries order.
 * Placing the title (Dr, Mr, Miss, etc) depends on the tradition in you country.
 * @link http://en.wikipedia.org/wiki/Personal_name#Naming_convention
 *
 * "sort_by" - determines you preferable way of sorting person names. The possible values are:
 * first_name                  - sorting names with priority for the first name;
 * last_name                   - sorting names with priority for the last name.
 */
return [
    'afrikaans' =>        ['format' => 'title first_name last_name',  'sort_by' => 'first_name'],
    'albanian' =>         ['format' => 'title first_name last_name',  'sort_by' => 'first_name'],
    'alemannic' =>        ['format' => 'title first_name last_name',  'sort_by' => 'first_name'],
    'amharic' =>          ['format' => 'title first_name last_name',  'sort_by' => 'first_name'],
    'armenian' =>         ['format' => 'title first_name last_name',  'sort_by' => 'first_name'],
    'arabic' =>           ['format' => 'title first_name last_name',  'sort_by' => 'first_name'],
    'asturian' =>         ['format' => 'title first_name last_name',  'sort_by' => 'first_name'],
    'bosnian' =>          ['format' => 'title first_name last_name',  'sort_by' => 'first_name'],
    'brazilian' =>        ['format' => 'title first_name last_name',  'sort_by' => 'first_name'],
    'breton' =>           ['format' => 'title first_name last_name',  'sort_by' => 'first_name'],
    'bulgarian' =>        ['format' => 'title first_name last_name',  'sort_by' => 'first_name'],
    'catalan' =>          ['format' => 'title first_name last_name',  'sort_by' => 'first_name'],
    'croatian' =>         ['format' => 'title first_name last_name',  'sort_by' => 'first_name'],
    'czech' =>            ['format' => 'title first_name last_name',  'sort_by' => 'first_name'],
    'danish' =>           ['format' => 'title first_name last_name',  'sort_by' => 'first_name'],
    'dari' =>             ['format' => 'title first_name last_name',  'sort_by' => 'first_name'],
    'dutch' =>            ['format' => 'title first_name last_name',  'sort_by' => 'first_name'],
    'english' =>          ['format' => 'title first_name last_name',  'sort_by' => 'first_name'],
    'esperanto' =>        ['format' => 'title first_name last_name',  'sort_by' => 'first_name'],
    'estonian' =>         ['format' => 'title first_name last_name',  'sort_by' => 'first_name'],
    'basque'  =>          ['format' => 'title first_name last_name',  'sort_by' => 'first_name'],
    'finnish' =>          ['format' => 'title first_name last_name',  'sort_by' => 'first_name'],
    'french' =>           ['format' => 'title first_name last_name',  'sort_by' => 'first_name'],
    'frisian' =>          ['format' => 'title first_name last_name',  'sort_by' => 'first_name'],
    'friulian' =>         ['format' => 'title first_name last_name',  'sort_by' => 'first_name'],
    'galician' =>         ['format' => 'title last_name first_name',  'sort_by' => 'last_name'],
    'georgian' =>         ['format' => 'title first_name last_name',  'sort_by' => 'first_name'],
    'german' =>           ['format' => 'title first_name last_name',  'sort_by' => 'first_name'],
    'greek' =>            ['format' => 'title first_name last_name',  'sort_by' => 'first_name'],
    'hawaiian' =>         ['format' => 'title first_name last_name',  'sort_by' => 'first_name'],
    'hebrew' =>           ['format' => 'title first_name last_name',  'sort_by' => 'first_name'],
    'hindi' =>            ['format' => 'title first_name last_name',  'sort_by' => 'first_name'],
    'hungarian' =>        ['format' => 'title last_name first_name',  'sort_by' => 'last_name'], // Eastern order
    'icelandic' =>        ['format' => 'title first_name last_name',  'sort_by' => 'first_name'],
    'indonesian' =>       ['format' => 'title first_name last_name',  'sort_by' => 'first_name'],
    'irish' =>            ['format' => 'title first_name last_name',  'sort_by' => 'first_name'],
    'italian' =>          ['format' => 'title first_name last_name',  'sort_by' => 'first_name'],
    'japanese' =>         ['format' => 'title last_name first_name',  'sort_by' => 'last_name'], // Eastern order
    'korean' =>           ['format' => 'title last_name first_name',  'sort_by' => 'last_name'], // Eastern order
    'latin' =>            ['format' => 'title first_name last_name',  'sort_by' => 'first_name'],
    'latvian' =>          ['format' => 'title first_name last_name',  'sort_by' => 'first_name'],
    'lithuanian' =>       ['format' => 'title first_name last_name',  'sort_by' => 'first_name'],
    'macedonian' =>       ['format' => 'title first_name last_name',  'sort_by' => 'first_name'],
    'malay' =>            ['format' => 'title last_name first_name',  'sort_by' => 'last_name'], // Eastern order
    'manx' =>             ['format' => 'title first_name last_name',  'sort_by' => 'first_name'],
    'marathi' =>          ['format' => 'title first_name last_name',  'sort_by' => 'first_name'],
    'middle_frisian' =>   ['format' => 'title first_name last_name',  'sort_by' => 'first_name'],
    'mingo' =>            ['format' => 'title first_name last_name',  'sort_by' => 'first_name'],
    'nepali' =>           ['format' => 'title first_name last_name',  'sort_by' => 'first_name'],
    'norwegian' =>        ['format' => 'title first_name last_name',  'sort_by' => 'first_name'],
    'occitan' =>          ['format' => 'title first_name last_name',  'sort_by' => 'first_name'],
    'pashto' =>           ['format' => 'title first_name last_name',  'sort_by' => 'first_name'],
    'persian' =>          ['format' => 'title first_name last_name',  'sort_by' => 'first_name'],
    'polish' =>           ['format' => 'title first_name last_name',  'sort_by' => 'first_name'],
    'portuguese' =>       ['format' => 'title first_name last_name',  'sort_by' => 'first_name'],
    'quechua_cusco' =>    ['format' => 'title first_name last_name',  'sort_by' => 'first_name'],
    'romanian' =>         ['format' => 'title first_name last_name',  'sort_by' => 'first_name'],
    'rumantsch' =>        ['format' => 'title first_name last_name',  'sort_by' => 'first_name'],
    'russian' =>          ['format' => 'title first_name last_name',  'sort_by' => 'first_name'],
    'sanskrit' =>         ['format' => 'title first_name last_name',  'sort_by' => 'first_name'],
    'serbian' =>          ['format' => 'title first_name last_name',  'sort_by' => 'first_name'],
    'serbian_cyrillic' => ['format' => 'title first_name last_name',  'sort_by' => 'first_name'],
    'simpl_chinese' =>    ['format' => 'title last_name first_name',  'sort_by' => 'last_name' ], // Eastern order
    'slovak' =>           ['format' => 'title first_name last_name',  'sort_by' => 'first_name'],
    'slovenian' =>        ['format' => 'title first_name last_name',  'sort_by' => 'first_name'],
    'spanish' =>          ['format' => 'title last_name, first_name',  'sort_by' => 'last_name'], // Library order
    'swahili' =>          ['format' => 'title first_name last_name',  'sort_by' => 'first_name'],
    'swedish' =>          ['format' => 'title first_name last_name',  'sort_by' => 'first_name'],
    'tagalog' =>          ['format' => 'title first_name last_name',  'sort_by' => 'first_name'],
    'tamil' =>            ['format' => 'title first_name last_name',  'sort_by' => 'first_name'],
    'thai' =>             ['format' => 'title first_name last_name',  'sort_by' => 'first_name'],
    'trad_chinese' =>     ['format' => 'title last_name first_name',  'sort_by' => 'last_name'], // Eastern order
    'turkish' =>          ['format' => 'title first_name last_name',  'sort_by' => 'first_name'],
    'ukrainian' =>        ['format' => 'title first_name last_name',  'sort_by' => 'first_name'],
    'vietnamese' =>       ['format' => 'title last_name first_name',  'sort_by' => 'last_name'], // Eastern order
    'welsh' =>            ['format' => 'title first_name last_name',  'sort_by' => 'first_name'],
    'yiddish' =>          ['format' => 'title first_name last_name',  'sort_by' => 'first_name'],
    'yoruba' =>           ['format' => 'title first_name last_name',  'sort_by' => 'first_name']
];
