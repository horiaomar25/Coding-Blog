<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('ne', array (
  'messages+intl-icu' => 
  array (
    'note' => 'नोट',
    'tip' => 'टिप',
    'not_available' => 'उपलब्ध छैन',
    'mit_license' => 'MIT लाइसेन्स',
    'http_error.name' => 'भूल {status_code, number}',
    'http_error.description' => 'त्यहाँ एउटा अज्ञात भूल (HTTP {status_code, number}) जसले तपाईंको अनुरोध पूरा हुनबाट रोक्यो।',
    'http_error.suggestion' => 'यो पृष्ठ केही मिनेटमा फेरि लोड गर्ने प्रयास गर्नुहोस् वा <a href="{url}">होमपेजमा फर्कनुहोस्</a>.',
    'http_error_403.description' => 'तपाईंसँग यो स्रोत पहुँच गर्ने अनुमति छैन।',
    'http_error_403.suggestion' => 'तपाइँको प्रबन्धक वा प्रणाली प्रशासकलाई तपाइँलाई यो स्रोतमा पहुँच प्रदान गर्न अनुरोध गर्नुहोस्।',
    'http_error_404.description' => 'हामीले तपाईंले अनुरोध गर्नुभएको पृष्ठ पाउनु सकेनौं।',
    'http_error_404.suggestion' => 'URL मा कुनै पनि गलत हिज्जे जाँच गर्नुहोस् वा <a href="{url}">होमपेजमा फर्कनुहोस्</a>.',
    'http_error_500.description' => 'त्यहाँ आन्तरिक सर्भरमा गलती थियो।',
    'http_error_500.suggestion' => 'यो पृष्ठ केही मिनेटमा फेरि लोड गर्ने प्रयास गर्नुहोस् वा <a href="{url}">होमपेजमा फर्कनुहोस्</a>.',
    'title.homepage' => '<strong>Symfony Demo</strong> अनुप्रयोगमा स्वागत छ',
    'title.source_code' => 'यो पृष्ठ रेन्डर गर्न प्रयोग गरिएको स्रोत कोड',
    'title.controller_code' => 'कन्ट्रोलर कोड',
    'title.twig_template_code' => 'ट्विग टेम्प्लेट कोड',
    'title.login' => 'सुरक्षित साइन इन',
    'title.post_list' => 'पोस्ट सूची',
    'title.edit_post' => 'पोस्ट सम्पादन #{id, number}',
    'title.add_comment' => 'टिप्पणी थप्नुहोस्',
    'title.comment_error' => 'तपाईंको टिप्पणी प्रकाशित गर्दा त्रुटि भयो',
    'title.edit_user' => 'प्रयोगकर्ता सम्पादन',
    'title.change_password' => 'पासवर्ड परिवर्तन',
    'action.show' => 'देखाउनु',
    'action.show_post' => 'पोस्ट देखाउनु',
    'action.show_code' => 'कोड देखाउनु',
    'action.edit' => 'सम्पादन',
    'action.edit_post' => 'पोस्ट सम्पादन',
    'action.save' => 'परिवर्तनहरू राख्नु',
    'action.delete_post' => 'पोस्ट मेटाउनु',
    'delete_post_modal.title' => 'के तपाइँ यो पोस्ट मेटाउन निश्चित हुनुहुन्छ?',
    'delete_post_modal.body' => 'यो कार्य पूर्ववत गर्न सकिँदैन।',
    'label.delete_post' => 'पोस्ट मेटाउनु',
    'label.cancel' => 'रद्द गर्नु',
    'action.create_post' => 'नयाँ पोस्ट लेख्नु',
    'label.create_post' => 'पोस्ट लेख्नु',
    'label.save_and_create_new' => 'बचत गर्नुहोस् र नयाँ लेख्नु',
    'action.back_to_list' => 'पोस्ट सूचीमा फर्कनु',
    'action.publish_comment' => 'टिप्पणी प्रकाशित गर्नु',
    'action.sign_in' => 'साइन इन',
    'action.browse_app' => 'अनुप्रयोग ब्राउज गर्नुहोस्',
    'action.browse_admin' => 'ब्याकइन्ड ब्राउज गर्नुहोस्',
    'action.edit_user' => 'प्रयोगकर्ता सम्पादन',
    'action.change_password' => 'पासवर्ड परिवर्तन',
    'action.close' => 'बन्द गर्नु',
    'label.title' => 'शीर्षक',
    'label.author' => 'लेखक',
    'label.author_email' => 'लेखक ईमेल',
    'label.username' => 'प्रयोगकर्ता नाम',
    'label.fullname' => 'पुरा नाम',
    'label.email' => 'इमेल',
    'label.password' => 'पासवर्ड',
    'label.remember_me' => 'मलाई प्रवेश गराइ राख्नुहोस्',
    'label.current_password' => 'वर्तमान पासवर्ड',
    'label.new_password' => 'नया पासवर्ड',
    'label.new_password_confirm' => 'पासवर्ड सुनिश्चित गर्नुहोस',
    'label.role' => 'भूमिका',
    'label.content' => 'कन्टेन्ट',
    'label.summary' => 'सारांश',
    'label.published_at' => 'मा प्रकाशित',
    'label.tags' => 'ट्यागहरू',
    'label.actions' => 'कार्यहरू',
    'title.post_new' => 'पोस्ट सिर्जना',
    'action.edit_contents' => 'कन्टेन्ट सम्पादन',
    'menu.toggle_nav' => 'नेभिगेसन टगल',
    'menu.choose_language' => 'भाषा छान्नुहोस्',
    'menu.post_list' => 'पोस्ट सूची',
    'menu.back_to_blog' => 'ब्लगमा फर्कनु',
    'menu.homepage' => 'होमपेज',
    'menu.admin' => 'ब्याकइन्ड',
    'menu.user' => 'खाता',
    'menu.logout' => 'बाहिर निस्कनु',
    'menu.rss' => 'ब्लग पोस्ट RSS',
    'menu.search' => 'खोज्नुहोस्',
    'post.to_publish_a_comment' => 'टिप्पणी प्रकाशित गर्न',
    'post.num_comments' => '{गणना, बहुवचन, एक {# टिप्पणी} अन्य {# टिप्पणी}}',
    'post.commented_on' => 'टिप्पणी गरे',
    'post.no_comments' => 'यस पोस्टमा टिप्पणी गर्ने पहिलो बन्नुहोस्।',
    'post.no_posts_found' => 'कुनै पोस्टहरू पाएन।',
    'post.created_successfully' => 'पोस्ट सफलतापूर्वक लेखियो!',
    'post.updated_successfully' => 'पोस्ट सफलतापूर्वक अद्यावधिक गरियो!',
    'post.deleted_successfully' => 'पोस्ट सफलतापूर्वक मेटाइयो!',
    'post.search_for' => 'खोज्नको लागि...',
    'post.search_no_results' => 'कुनै परिणाम पाएन।',
    'user.updated_successfully' => 'प्रयोगकर्ता सफलतापूर्वक अद्यावधिक गरियो!',
    'notification.comment_created' => 'तपाईंको पोस्टले टिप्पणी प्राप्त गर्यो!',
    'notification.comment_created.description' => 'तपाईंको पोस्ट "{title}" ले नयाँ टिप्पणी प्राप्त गरेको छ। तपाईंले <a href="{link}">यो लिङ्क</a> थिचेर टिप्पणी पढ्न सक्नुहुन्छ',
    'help.app_description' => 'यो एउटा <strong>डेमो अनुप्रयोग</strong> हो जुन Symfony फ्रेमवर्कमा Symfony अनुप्रयोगहरू विकास गर्ने सिफारिस गरिएको तरिकालाई चित्रण गर्न बनाइएको हो।',
    'help.show_code' => 'यो पृष्ठ रेन्डर गर्न प्रयोग गरिएको <strong>नियन्त्रक</strong> र <strong>टेम्प्लेट</strong> को स्रोत कोड देखाउन यो बटनमा क्लिक गर्नुहोस्।',
    'help.browse_app' => 'डेमो अनुप्रयोगको <strong>सार्वजनिक खण्ड</strong> ब्राउज गर्नुहोस्।',
    'help.browse_admin' => 'डेमो अनुप्रयोगको <strong>प्रशासक ब्याकइन्ड</strong> ब्राउज गर्नुहोस्।',
    'help.login_users' => 'निम्न प्रयोगकर्ताहरू मध्ये कुनै पनि प्रयास गर्नुहोस्',
    'help.role_user' => 'नियमित प्रयोगकर्ता',
    'help.role_admin' => 'प्रशासक',
    'help.reload_fixtures' => 'यदि यी प्रयोगकर्ताहरूले काम गर्दैनन् भने, टर्मिनलबाट यो आदेश चलाएर अनुप्रयोग फिक्स्चरहरू पुन: लोड गर्नुहोस्:',
    'help.add_user' => 'यदि तपाइँ नयाँ प्रयोगकर्ताहरू सिर्जना गर्न चाहनुहुन्छ भने, यो अन्य आदेश चलाउनुहोस्:',
    'help.more_information' => 'थप जानकारीको लागि, <a href="https://symfony.com/doc">Symfony doc</a> हेर्नुहोस्।',
    'help.post_summary' => 'सारांशहरूले मार्कडाउन वा HTML कन्टेन्टहरू समावेश गर्न सक्दैन; केवल सादा पाठ।',
    'help.post_publication' => 'ब्लग पोस्ट प्रकाशन तालिका बनाउन भविष्यमा मिति सेट गर्नुहोस्।',
    'help.post_content' => 'ब्लग पोस्ट कन्टेन्ट ढाँचा गर्न मार्कडाउन प्रयोग गर्नुहोस्। HTML लाई पनि अनुमति छ।',
    'help.comment_content' => 'हाम्रो आचार संहिताको पालना नगर्ने टिप्पणीहरू मध्यस्थ गरिनेछ।',
    'info.change_password' => 'आफ्नो पासवर्ड परिवर्तन गरेपछि, तपाइँ अनुप्रयोगबाट लग आउट हुनुहुनेछ।',
    'rss.title' => 'सिम्फनी डेमो ब्लग',
    'rss.description' => 'सिम्फनी डेमो ब्लगमा प्रकाशित सबैभन्दा भर्खरका पोष्टहरू',
    'paginator.previous' => 'अघिल्लो',
    'paginator.next' => 'अर्को',
    'paginator.current' => '(वर्तमान)',
  ),
  'validators+intl-icu' => 
  array (
    'post.slug_unique' => 'यो शीर्षक पहिले नै अर्को ब्लग पोस्टमा प्रयोग गरिएको छ, तिनीहरू अद्वितीय हुनुपर्छ।',
    'post.blank_summary' => 'आफ्नो पोस्ट को सारांश दिनुहोस्!',
    'post.blank_content' => 'तपाईंको पोस्टमा केही कन्टेन्ट हुनुपर्छ!',
    'post.too_short_content' => 'पोस्ट कन्टेन्ट धेरै छोटो छ ({ limit } वर्ण न्यूनतम)',
    'post.too_many_tags' => 'धेरै ट्यागहरू ({ limit } ट्यागहरू वा कम थप्नुहोस्)',
    'comment.blank' => 'कृपया आफ्नो टिप्पणी खाली नछोड्नुहोस्!',
    'comment.too_short' => 'टिप्पणी धेरै छोटो छ ({ limit } वर्ण न्यूनतम)',
    'comment.too_long' => 'टिप्पणी धेरै लामो छ ({ limit } वर्ण अधिकतम)',
    'comment.is_spam' => 'यस टिप्पणीको कन्टेन्ट स्प्याम मानिन्छ।',
  ),
));

$catalogueEn = new MessageCatalogue('en', array (
  'validators+intl-icu' => 
  array (
    'post.slug_unique' => 'This title was already used in another blog post, but they must be unique.',
    'post.blank_summary' => 'Give your post a summary!',
    'post.blank_content' => 'Your post should have some content!',
    'post.too_short_content' => 'Post content is too short ({ limit } characters minimum)',
    'post.too_many_tags' => 'Too many tags (add { limit } tags or less)',
    'comment.blank' => 'Please don\'t leave your comment blank!',
    'comment.too_short' => 'Comment is too short ({ limit } characters minimum)',
    'comment.too_long' => 'Comment is too long ({ limit } characters maximum)',
    'comment.is_spam' => 'The content of this comment is considered spam.',
  ),
  'validators' => 
  array (
    'This value should be false.' => 'This value should be false.',
    'This value should be true.' => 'This value should be true.',
    'This value should be of type {{ type }}.' => 'This value should be of type {{ type }}.',
    'This value should be blank.' => 'This value should be blank.',
    'The value you selected is not a valid choice.' => 'The value you selected is not a valid choice.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.',
    'One or more of the given values is invalid.' => 'One or more of the given values is invalid.',
    'This field was not expected.' => 'This field was not expected.',
    'This field is missing.' => 'This field is missing.',
    'This value is not a valid date.' => 'This value is not a valid date.',
    'This value is not a valid datetime.' => 'This value is not a valid datetime.',
    'This value is not a valid email address.' => 'This value is not a valid email address.',
    'The file could not be found.' => 'The file could not be found.',
    'The file is not readable.' => 'The file is not readable.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.',
    'This value should be {{ limit }} or less.' => 'This value should be {{ limit }} or less.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.',
    'This value should be {{ limit }} or more.' => 'This value should be {{ limit }} or more.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.',
    'This value should not be blank.' => 'This value should not be blank.',
    'This value should not be null.' => 'This value should not be null.',
    'This value should be null.' => 'This value should be null.',
    'This value is not valid.' => 'This value is not valid.',
    'This value is not a valid time.' => 'This value is not a valid time.',
    'This value is not a valid URL.' => 'This value is not a valid URL.',
    'The two values should be equal.' => 'The two values should be equal.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'The file is too large.',
    'The file could not be uploaded.' => 'The file could not be uploaded.',
    'This value should be a valid number.' => 'This value should be a valid number.',
    'This file is not a valid image.' => 'This file is not a valid image.',
    'This is not a valid IP address.' => 'This value is not a valid IP address.',
    'This value is not a valid language.' => 'This value is not a valid language.',
    'This value is not a valid locale.' => 'This value is not a valid locale.',
    'This value is not a valid country.' => 'This value is not a valid country.',
    'This value is already used.' => 'This value is already used.',
    'The size of the image could not be detected.' => 'The size of the image could not be detected.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'This value should be the user\'s current password.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.',
    'The file was only partially uploaded.' => 'The file was only partially uploaded.',
    'No file was uploaded.' => 'No file was uploaded.',
    'No temporary folder was configured in php.ini.' => 'No temporary folder was configured in php.ini, or the configured folder does not exist.',
    'Cannot write temporary file to disk.' => 'Cannot write temporary file to disk.',
    'A PHP extension caused the upload to fail.' => 'A PHP extension caused the upload to fail.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.',
    'Invalid card number.' => 'Invalid card number.',
    'Unsupported card type or invalid card number.' => 'Unsupported card type or invalid card number.',
    'This is not a valid International Bank Account Number (IBAN).' => 'This value is not a valid International Bank Account Number (IBAN).',
    'This value is not a valid ISBN-10.' => 'This value is not a valid ISBN-10.',
    'This value is not a valid ISBN-13.' => 'This value is not a valid ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'This value is neither a valid ISBN-10 nor a valid ISBN-13.',
    'This value is not a valid ISSN.' => 'This value is not a valid ISSN.',
    'This value is not a valid currency.' => 'This value is not a valid currency.',
    'This value should be equal to {{ compared_value }}.' => 'This value should be equal to {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'This value should be greater than {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'This value should be greater than or equal to {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should be identical to {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'This value should be less than {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'This value should be less than or equal to {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'This value should not be equal to {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.',
    'An empty file is not allowed.' => 'An empty file is not allowed.',
    'The host could not be resolved.' => 'The host could not be resolved.',
    'This value does not match the expected {{ charset }} charset.' => 'This value does not match the expected {{ charset }} charset.',
    'This is not a valid Business Identifier Code (BIC).' => 'This value is not a valid Business Identifier Code (BIC).',
    'Error' => 'Error',
    'This is not a valid UUID.' => 'This value is not a valid UUID.',
    'This value should be a multiple of {{ compared_value }}.' => 'This value should be a multiple of {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.',
    'This value should be valid JSON.' => 'This value should be valid JSON.',
    'This collection should contain only unique elements.' => 'This collection should contain only unique elements.',
    'This value should be positive.' => 'This value should be positive.',
    'This value should be either positive or zero.' => 'This value should be either positive or zero.',
    'This value should be negative.' => 'This value should be negative.',
    'This value should be either negative or zero.' => 'This value should be either negative or zero.',
    'This value is not a valid timezone.' => 'This value is not a valid timezone.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'This password has been leaked in a data breach, it must not be used. Please use another password.',
    'This value should be between {{ min }} and {{ max }}.' => 'This value should be between {{ min }} and {{ max }}.',
    'This value is not a valid hostname.' => 'This value is not a valid hostname.',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => 'The number of elements in this collection should be a multiple of {{ compared_value }}.',
    'This value should satisfy at least one of the following constraints:' => 'This value should satisfy at least one of the following constraints:',
    'Each element of this collection should satisfy its own set of constraints.' => 'Each element of this collection should satisfy its own set of constraints.',
    'This value is not a valid International Securities Identification Number (ISIN).' => 'This value is not a valid International Securities Identification Number (ISIN).',
    'This value should be a valid expression.' => 'This value should be a valid expression.',
    'This value is not a valid CSS color.' => 'This value is not a valid CSS color.',
    'This value is not a valid CIDR notation.' => 'This value is not a valid CIDR notation.',
    'The value of the netmask should be between {{ min }} and {{ max }}.' => 'The value of the netmask should be between {{ min }} and {{ max }}.',
    'The filename is too long. It should have {{ filename_max_length }} character or less.|The filename is too long. It should have {{ filename_max_length }} characters or less.' => 'The filename is too long. It should have {{ filename_max_length }} character or less.|The filename is too long. It should have {{ filename_max_length }} characters or less.',
    'The password strength is too low. Please use a stronger password.' => 'The password strength is too low. Please use a stronger password.',
    'This value contains characters that are not allowed by the current restriction-level.' => 'This value contains characters that are not allowed by the current restriction-level.',
    'Using invisible characters is not allowed.' => 'Using invisible characters is not allowed.',
    'Mixing numbers from different scripts is not allowed.' => 'Mixing numbers from different scripts is not allowed.',
    'Using hidden overlay characters is not allowed.' => 'Using hidden overlay characters is not allowed.',
    'The extension of the file is invalid ({{ extension }}). Allowed extensions are {{ extensions }}.' => 'The extension of the file is invalid ({{ extension }}). Allowed extensions are {{ extensions }}.',
    'The detected character encoding is invalid ({{ detected }}). Allowed encodings are {{ encodings }}.' => 'The detected character encoding is invalid ({{ detected }}). Allowed encodings are {{ encodings }}.',
    'This value is not a valid MAC address.' => 'This value is not a valid MAC address.',
    'This URL is missing a top-level domain.' => 'This URL is missing a top-level domain.',
    'This form should not contain extra fields.' => 'This form should not contain extra fields.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'The uploaded file was too large. Please try to upload a smaller file.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'The CSRF token is invalid. Please try to resubmit the form.',
    'This value is not a valid HTML5 color.' => 'This value is not a valid HTML5 color.',
    'Please enter a valid birthdate.' => 'Please enter a valid birthdate.',
    'The selected choice is invalid.' => 'The selected choice is invalid.',
    'The collection is invalid.' => 'The collection is invalid.',
    'Please select a valid color.' => 'Please select a valid color.',
    'Please select a valid country.' => 'Please select a valid country.',
    'Please select a valid currency.' => 'Please select a valid currency.',
    'Please choose a valid date interval.' => 'Please choose a valid date interval.',
    'Please enter a valid date and time.' => 'Please enter a valid date and time.',
    'Please enter a valid date.' => 'Please enter a valid date.',
    'Please select a valid file.' => 'Please select a valid file.',
    'The hidden field is invalid.' => 'The hidden field is invalid.',
    'Please enter an integer.' => 'Please enter an integer.',
    'Please select a valid language.' => 'Please select a valid language.',
    'Please select a valid locale.' => 'Please select a valid locale.',
    'Please enter a valid money amount.' => 'Please enter a valid money amount.',
    'Please enter a number.' => 'Please enter a number.',
    'The password is invalid.' => 'The password is invalid.',
    'Please enter a percentage value.' => 'Please enter a percentage value.',
    'The values do not match.' => 'The values do not match.',
    'Please enter a valid time.' => 'Please enter a valid time.',
    'Please select a valid timezone.' => 'Please select a valid timezone.',
    'Please enter a valid URL.' => 'Please enter a valid URL.',
    'Please enter a valid search term.' => 'Please enter a valid search term.',
    'Please provide a valid phone number.' => 'Please provide a valid phone number.',
    'The checkbox has an invalid value.' => 'The checkbox has an invalid value.',
    'Please enter a valid email address.' => 'Please enter a valid email address.',
    'Please select a valid option.' => 'Please select a valid option.',
    'Please select a valid range.' => 'Please select a valid range.',
    'Please enter a valid week.' => 'Please enter a valid week.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'An authentication exception occurred.',
    'Authentication credentials could not be found.' => 'Authentication credentials could not be found.',
    'Authentication request could not be processed due to a system problem.' => 'Authentication request could not be processed due to a system problem.',
    'Invalid credentials.' => 'Invalid credentials.',
    'Cookie has already been used by someone else.' => 'Cookie has already been used by someone else.',
    'Not privileged to request the resource.' => 'Not privileged to request the resource.',
    'Invalid CSRF token.' => 'Invalid CSRF token.',
    'No authentication provider found to support the authentication token.' => 'No authentication provider found to support the authentication token.',
    'No session available, it either timed out or cookies are not enabled.' => 'No session available, it either timed out or cookies are not enabled.',
    'No token could be found.' => 'No token could be found.',
    'Username could not be found.' => 'Username could not be found.',
    'Account has expired.' => 'Account has expired.',
    'Credentials have expired.' => 'Credentials have expired.',
    'Account is disabled.' => 'Account is disabled.',
    'Account is locked.' => 'Account is locked.',
    'Too many failed login attempts, please try again later.' => 'Too many failed login attempts, please try again later.',
    'Invalid or expired login link.' => 'Invalid or expired login link.',
    'Too many failed login attempts, please try again in %minutes% minute.' => 'Too many failed login attempts, please try again in %minutes% minute.',
    'Too many failed login attempts, please try again in %minutes% minutes.' => 'Too many failed login attempts, please try again in %minutes% minutes.',
  ),
  'messages+intl-icu' => 
  array (
    'note' => 'NOTE',
    'tip' => 'TIP',
    'not_available' => 'Not available',
    'mit_license' => 'MIT License',
    'http_error.name' => 'Error {status_code, number}',
    'http_error.description' => 'There was an unknown error (HTTP {status_code, number}) that prevented to complete your request.',
    'http_error.suggestion' => 'Try loading this page again in some minutes or <a href="{url}">go back to the homepage</a>.',
    'http_error_403.description' => 'You don\'t have permission to access to this resource.',
    'http_error_403.suggestion' => 'Ask your manager or system administrator to grant you access to this resource.',
    'http_error_404.description' => 'We couldn\'t find the page you requested.',
    'http_error_404.suggestion' => 'Check out any misspelling in the URL or <a href="{url}">go back to the homepage</a>.',
    'http_error_500.description' => 'There was an internal server error.',
    'http_error_500.suggestion' => 'Try loading this page again in some minutes or <a href="{url}">go back to the homepage</a>.',
    'title.homepage' => 'Welcome to the <strong>Symfony Demo</strong> application',
    'title.source_code' => 'Source code used to render this page',
    'title.controller_code' => 'Controller code',
    'title.twig_template_code' => 'Twig template code',
    'title.login' => 'Secure Sign in',
    'title.post_list' => 'Post List',
    'title.edit_post' => 'Edit post #{id, number}',
    'title.add_comment' => 'Add a comment',
    'title.comment_error' => 'There was an error publishing your comment',
    'title.edit_user' => 'Edit user',
    'title.change_password' => 'Change password',
    'action.show' => 'Show',
    'action.show_post' => 'Show post',
    'action.show_code' => 'Show code',
    'action.edit' => 'Edit',
    'action.edit_post' => 'Edit post',
    'action.save' => 'Save changes',
    'action.delete_post' => 'Delete post',
    'delete_post_modal.title' => 'Are you sure you want to delete this post?',
    'delete_post_modal.body' => 'This action cannot be undone.',
    'label.delete_post' => 'Delete post',
    'label.cancel' => 'Cancel',
    'action.create_post' => 'Create a new post',
    'label.create_post' => 'Create post',
    'label.save_and_create_new' => 'Save and create new',
    'action.back_to_list' => 'Back to the post list',
    'action.publish_comment' => 'Publish comment',
    'action.sign_in' => 'Sign in',
    'action.browse_app' => 'Browse application',
    'action.browse_admin' => 'Browse backend',
    'action.edit_user' => 'Edit user',
    'action.change_password' => 'Change password',
    'action.close' => 'Close',
    'label.title' => 'Title',
    'label.author' => 'Author',
    'label.author_email' => 'Author email',
    'label.username' => 'Username',
    'label.fullname' => 'Fullname',
    'label.email' => 'Email',
    'label.password' => 'Password',
    'label.remember_me' => 'Keep me logged in',
    'label.current_password' => 'Current password',
    'label.new_password' => 'New password',
    'label.new_password_confirm' => 'Confirm password',
    'label.role' => 'Role',
    'label.content' => 'Content',
    'label.summary' => 'Summary',
    'label.published_at' => 'Published at',
    'label.tags' => 'Tags',
    'label.actions' => 'Actions',
    'title.post_new' => 'Post creation',
    'action.edit_contents' => 'Edit contents',
    'menu.toggle_nav' => 'Toggle navigation',
    'menu.choose_language' => 'Choose language',
    'menu.post_list' => 'Post list',
    'menu.back_to_blog' => 'Back to blog',
    'menu.homepage' => 'Homepage',
    'menu.admin' => 'Backend',
    'menu.user' => 'Account',
    'menu.logout' => 'Logout',
    'menu.rss' => 'Blog Posts RSS',
    'menu.search' => 'Search',
    'post.to_publish_a_comment' => 'to publish a comment',
    'post.num_comments' => '{count, plural, one {# comment} other {# comments}}',
    'post.commented_on' => 'commented on',
    'post.no_comments' => 'Be the first to comment on this post.',
    'post.no_posts_found' => 'No posts found.',
    'post.created_successfully' => 'Post created successfully!',
    'post.updated_successfully' => 'Post updated successfully!',
    'post.deleted_successfully' => 'Post deleted successfully!',
    'post.search_for' => 'Search for...',
    'post.search_no_results' => 'No results found',
    'user.updated_successfully' => 'User updated successfully!',
    'notification.comment_created' => 'Your post received a comment!',
    'notification.comment_created.description' => 'Your post "{title}" has received a new comment. You can read the comment by following <a href="{link}">this link</a>',
    'help.app_description' => 'This is a <strong>demo application</strong> built in the Symfony Framework to illustrate the recommended way of developing Symfony applications.',
    'help.show_code' => 'Click on this button to show the source code of the <strong>Controller</strong> and <strong>template</strong> used to render this page.',
    'help.browse_app' => 'Browse the <strong>public section</strong> of the demo application.',
    'help.browse_admin' => 'Browse the <strong>admin backend</strong> of the demo application.',
    'help.login_users' => 'Try either of the following users',
    'help.role_user' => 'regular user',
    'help.role_admin' => 'administrator',
    'help.reload_fixtures' => 'If these users don\'t work, reload application fixtures by running this command from the terminal:',
    'help.add_user' => 'If you want to create new users, run this other command:',
    'help.more_information' => 'For more information, check out the <a href="https://symfony.com/doc">Symfony doc</a>.',
    'help.post_summary' => 'Summaries can\'t contain Markdown or HTML contents; only plain text.',
    'help.post_publication' => 'Set the date in the future to schedule the blog post publication.',
    'help.post_content' => 'Use Markdown to format the blog post contents. HTML is allowed too.',
    'help.comment_content' => 'Comments not complying with our Code of Conduct will be moderated.',
    'info.change_password' => 'After changing your password, you will be logged out of the application.',
    'rss.title' => 'Symfony Demo blog',
    'rss.description' => 'Most recent posts published on the Symfony Demo blog',
    'paginator.previous' => 'Previous',
    'paginator.next' => 'Next',
    'paginator.current' => '(current)',
  ),
));
$catalogue->addFallbackCatalogue($catalogueEn);

return $catalogue;
