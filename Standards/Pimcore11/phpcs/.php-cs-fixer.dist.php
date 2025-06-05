<?php

$rules = [
  '@PSR1' => true,
  '@PSR2' => true,
  'array_syntax' => ['syntax' => 'short'],

  // keep aligned = and => operators as they are: do not force aligning, but do not remove it
  'binary_operator_spaces' => true,
  'blank_line_before_statement' => ['statements' => ['return']],
  'blank_lines_before_namespace' => true,
  'encoding' => true,
  'single_line_comment_style' => ['comment_types' => ['hash']],
  'lowercase_cast' => true,
  'method_argument_space' => ['on_multiline' => 'ignore'],
  'class_attributes_separation' => ['elements' => ['method' => 'one']],
  'class_definition' => ['single_line' => true],
  'clean_namespace' => true,
  'concat_space' => ['spacing' => 'one'],
  'declare_parentheses' => true,
  'empty_loop_body' => ['style' => 'braces'],
  'fully_qualified_strict_types' => true,
  'function_declaration' => true,
  'general_phpdoc_tag_rename' => ['replacements' => ['inheritDocs' => 'inheritDoc']],
  'lambda_not_used_import' => true,
  'linebreak_after_opening_tag' => true,
  'magic_constant_casing' => true,
  'native_function_casing' => true,
  'no_alternative_syntax' => true,
  'no_blank_lines_after_class_opening' => true,
  'no_blank_lines_after_phpdoc' => true,
  'no_empty_comment' => true,
  'no_empty_phpdoc' => true,
  'no_empty_statement' => true,
  'no_extra_blank_lines' => true,
  'no_leading_import_slash' => true,
  'no_leading_namespace_whitespace' => true,
  'no_short_bool_cast' => true,
  'no_spaces_around_offset' => true,
  'no_unneeded_control_parentheses' => true,
  'no_unused_imports' => true,
  'no_whitespace_before_comma_in_array' => true,
  'no_whitespace_in_blank_line' => true,
  'object_operator_without_whitespace' => true,
  'ordered_imports' => true,
  'phpdoc_indent' => true,
  'phpdoc_no_useless_inheritdoc' => true,
  'phpdoc_scalar' => true,
  'phpdoc_separation' => true,
  'phpdoc_single_line_var_spacing' => true,
  'return_type_declaration' => true,
  'short_scalar_cast' => true,
  'single_space_around_construct' => true,
  'single_quote' => true,
  'space_after_semicolon' => true,
  'standardize_not_equals' => true,
  'ternary_operator_spaces' => true,
  'trim_array_spaces' => true,
  'type_declaration_spaces' => true,
  'types_spaces' => ['space' => 'single'],
  'unary_operator_spaces' => true,
  'whitespace_after_comma_in_array' => true,
];

$finder = (new PhpCsFixer\Finder)
  ->in([
    __DIR__ . '/../../../../../../src',
  ])

  // do not fix views
  ->notName('*.html.php')

  // using notPath instead of exclude here as they can be nested (install-profiles)
  ->notPath(__DIR__ . '/../../../../../../var\/config')
  ->notPath(__DIR__ . '/../../../../../../var\/classes');

// do not enable self_accessor as it breaks pimcore models relying on get_called_class()
return (new PhpCsFixer\Config)
  ->setRules($rules)
  ->setFinder($finder);
