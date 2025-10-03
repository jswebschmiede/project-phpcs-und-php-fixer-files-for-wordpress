<?php

// phpcs:disable PSR1.Files.SideEffects.FoundWithSymbols
return ( new PhpCsFixer\Config() )
	->setRules( array(
		// WordPress Coding Standards Base Rules
		'@PSR12' => true,

		// WordPress Specific Formatting
		'indentation_type'                    => true, // Use tabs
		'array_syntax'                        => array( 'syntax' => 'long' ), // WordPress long array syntax
		'array_indentation'                   => true,
		'concat_space'                        => array( 'spacing' => 'one' ), // One space around concatenation
		'function_typehint_space'             => true, // Space before typehints
		'method_argument_space'               => array( 'on_multiline' => 'ensure_fully_multiline' ),
		'no_spaces_after_function_name'       => true,
		'spaces_inside_parentheses'           => array( 'space' => 'single' ), // Add spaces inside parentheses for control structures
		'no_trailing_whitespace'              => true,
		'no_whitespace_before_comma_in_array' => true,
		'whitespace_after_comma_in_array'     => true,
		'no_extra_blank_lines'                => array(
			'tokens' => array(
				'extra',
				'parenthesis_brace_block',
				'square_brace_block',
				'curly_brace_block',
				'throw',
				'use',
				'use_trait',
			),
		),

		// Brace Style - WordPress style (opening brace on same line)
		'braces' => array(
			'allow_single_line_closure'                   => false,
			'position_after_functions_and_oop_constructs' => 'same',
			'position_after_control_structures'           => 'same',
			'position_after_anonymous_constructs'         => 'same',
		),
		// Override PSR12 class/function braces to WordPress style
		'braces_position' => array(
			'classes_opening_brace'             => 'same_line',
			'functions_opening_brace'           => 'same_line',
			'anonymous_classes_opening_brace'   => 'same_line',
			'anonymous_functions_opening_brace' => 'same_line',
		),

		// Control Structures
		'elseif'                                  => true, // Use elseif instead of else if
		'no_superfluous_elseif'                   => true,
		'switch_case_semicolon_to_colon'          => true,
		'switch_case_space'                       => true,
		'control_structure_continuation_position' => array( 'position' => 'same_line' ),

		// Operators - WordPress spacing rules with alignment
		'binary_operator_spaces' => array(
			'default'   => 'single_space',
			'operators' => array(
				'=>' => 'align_single_space', // Align array arrows
				'='  => 'align_single_space', // Align equals signs in assignments
			),
		),
		'increment_style'         => array( 'style' => 'pre' ), // Pre-increment, no spaces
		'ternary_operator_spaces' => true,
		'unary_operator_spaces'   => true, // Add spaces around unary operators like !
		'not_operator_with_space' => true, // Ensure space after ! operator

		// Arrays - WordPress style with spaces inside parentheses
		'no_multiline_whitespace_around_double_arrow' => false,
		'no_trailing_comma_in_singleline_array'       => true,
		'trim_array_spaces'                           => false,

		// Classes and Objects
		'class_attributes_separation' => array(
			'elements' => array( 'method' => 'one' ),
		),
		'class_definition' => array(
			'multi_line_extends_each_single_line' => false,
			'single_item_single_line'             => false,
			'single_line'                         => false,
			'space_before_parenthesis'            => false,
		),
		'no_blank_lines_after_class_opening' => true,
		'object_operator_without_whitespace' => true,

		// Functions
		'function_declaration'                             => array( 'closure_function_spacing' => 'one' ),
		'nullable_type_declaration_for_default_null_value' => true,

		// Strings and Quotes
		'single_quote'    => false, // WordPress uses double quotes for HTML attributes
		'no_useless_else' => true,

		// Additional WordPress compliance rules
		'blank_line_after_namespace'                    => true,
		'blank_line_after_opening_tag'                  => true,
		'cast_spaces'                                   => array( 'space' => 'none' ),
		'combine_consecutive_unsets'                    => true,
		'declare_equal_normalize'                       => true,
		'declare_strict_types'                          => false, // WordPress doesn't require strict types everywhere
		'lowercase_cast'                                => true,
		'lowercase_keywords'                            => true,
		'lowercase_static_reference'                    => true,
		'magic_constant_casing'                         => true,
		'magic_method_casing'                           => true,
		'native_function_casing'                        => true,
		'native_function_type_declaration_casing'       => true,
		'no_alias_functions'                            => true,
		'no_empty_statement'                            => true,
		'no_leading_import_slash'                       => true,
		'no_leading_namespace_whitespace'               => true,
		'no_mixed_echo_print'                           => array( 'use' => 'echo' ),
		'no_short_bool_cast'                            => true,
		'no_singleline_whitespace_before_semicolons'    => true,
		'no_trailing_comma_in_singleline_function_call' => true,
		'no_unneeded_control_parentheses'               => array(
			'statements' => array( 'break', 'clone', 'continue', 'echo_print', 'return', 'switch_case', 'yield' ),
		),
		'no_unneeded_curly_braces'           => true,
		'no_unset_cast'                      => true,
		'no_unused_imports'                  => true,
		'no_whitespace_in_blank_line'        => true,
		'normalize_index_brace'              => true,
		'php_unit_fqcn_annotation'           => true,
		'phpdoc_align'                       => false, // WordPress doesn't require aligned PHPDoc
		'phpdoc_annotation_without_dot'      => true,
		'phpdoc_indent'                      => true,
		'phpdoc_inline_tag_normalizer'       => true,
		'phpdoc_no_access'                   => true,
		'phpdoc_no_alias_tag'                => true,
		'phpdoc_no_empty_return'             => true,
		'phpdoc_no_package'                  => true,
		'phpdoc_no_useless_inheritdoc'       => true,
		'phpdoc_order'                       => true,
		'phpdoc_return_self_reference'       => true,
		'phpdoc_scalar'                      => true,
		'phpdoc_separation'                  => true,
		'phpdoc_single_line_var_spacing'     => true,
		'phpdoc_summary'                     => true,
		'phpdoc_to_comment'                  => false, // Keep PHPDoc as is
		'phpdoc_trim'                        => true,
		'phpdoc_types'                       => true,
		'phpdoc_var_without_name'            => true,
		'return_type_declaration'            => array( 'space_before' => 'none' ),
		'semicolon_after_instruction'        => true,
		'short_scalar_cast'                  => true,
		'single_blank_line_at_eof'           => true,
		'single_class_element_per_statement' => true,
		'single_import_per_statement'        => true,
		'single_line_after_imports'          => true,
		'single_line_comment_style'          => array(
			'comment_types' => array( 'hash' ),
		),
		'single_space_after_construct' => true,
		'space_after_semicolon'        => true,
		'switch_continue_to_break'     => true,
		'ternary_to_null_coalescing'   => true,
		'trailing_comma_in_multiline'  => array(
			'elements' => array( 'arrays', 'arguments', 'parameters' ),
		),
		'visibility_required' => array(
			'elements' => array( 'property', 'method' ),
		),
		'void_return' => true,
		'yoda_style'  => array(
			'equal'            => true,
			'identical'        => true,
			'less_and_greater' => true,
		), // Use Yoda conditions
	) )
	->setIndent( "\t" ) // WordPress uses tabs
	->setLineEnding( "\n" );
// phpcs:enable PSR1.Files.SideEffects.FoundWithSymbols
