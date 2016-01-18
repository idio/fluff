<?php
// Add in *.ctp files
$finder = Symfony\CS\Finder\DefaultFinder::create()
    ->name('*.ctp')
    ->exclude('deps');

$fixers = array(

    // PSR-0 – Classes must be in a path that matches their namespace, be at
    // least one namespace deep, and the class name should match the file
    // name.
    // This lowercases model names etc :(
    // "psr0",

    // PSR-1 – PHP code MUST use only UTF-8 without BOM (remove BOM).
    "encoding",

    // PSR-1 – PHP code must use the long <?php tags or the short-echo <?=
    // tags; it must not use the other tag variations.
    "short_tag",

    // PSR-2 – The body of each structure MUST be enclosed by braces. Braces
    // should be properly placed. Body of braces should be properly indented.
    "braces",

    // PSR-2 – The keyword elseif should be used instead of else if so that all
    // control keywords looks like single words.
    "elseif",

    // PSR-2 – A file must always end with a single empty line feed.
    "eof_ending",

    // PSR-2 – When making a method or function call, there MUST NOT be a space
    // between the method or function name and the opening parenthesis.
    "function_call_space",

    // PSR-2 – Spaces should be properly placed in a function declaration.
    "function_declaration",

    // PSR-2 – Code MUST use an indent of 4 spaces, and MUST NOT use tabs for
    // indenting.
    "indentation",

    // PSR-2 – There MUST be one blank line after the namespace declaration.
    "line_after_namespace",

    // PSR-2 – All PHP files must use the Unix LF (linefeed) line ending.
    "linefeed",

    // PSR-2 – The PHP constants true, false, and null MUST be in lower case.
    "lowercase_constants",

    // PSR-2 – PHP keywords MUST be in lower case.
    "lowercase_keywords",

    // PSR-2 – In method arguments and method call, there MUST NOT be a space
    // before each comma and there MUST be one space after each comma.
    "method_argument_space",

    // PSR-2 – There MUST be one use keyword per declaration.
    "multiple_use",

    // PSR-2 – There MUST NOT be a space after the opening parenthesis. There
    // MUST NOT be a space before the closing parenthesis.
    "parenthesis",

    // PSR-2 – The closing tag MUST be omitted from files containing only PHP.
    "php_closing_tag",

    // PSR-2 – Each namespace use MUST go on its own line and there MUST be one
    // blank line after the use statements block.
    // Removes blank lines between uses too, which trashes third party / app
    // separation :(
    // "single_line_after_imports",

    // PSR-2 – Remove trailing whitespace at the end of non-blank lines.
    "trailing_spaces",

    // PSR-2 – Visibility MUST be declared on all properties and methods;
    // abstract and final MUST be declared before the visibility; static MUST be
    // declared after the visibility.
    "visibility",

    // symfony – Ensure there is no code on the same line as the PHP open tag
    // and it is followed by a blankline.
    "blankline_after_open_tag",

    // symfony – Concatenation should be used without spaces.
    // "concat_without_spaces",

    // symfony – Operator => should not be surrounded by multi-line whitespaces.
    "double_arrow_multiline_whitespaces",

    // symfony – Remove duplicated semicolons.
    "duplicate_semicolon",

    // symfony – A return statement wishing to return nothing should be simply
    // "return".
    "empty_return",

    // symfony – Removes extra empty lines.
    // "extra_empty_lines",

    // symfony – Include and file path should be divided with a single space.
    // File path should not be placed under brackets.
    // "include",

    // symfony – Implode function should be used instead of join function.
    // "join_function",

    // symfony – Remove trailing commas in list function calls",
    "list_commas",

    // symfony – PHP multi-line arrays should have a trailing comma.
    // "multiline_array_trailing_comma",

    // symfony – The namespace declaration line shouldn't contain leading
    // whitespace.
    "namespace_no_leading_whitespace",

    // symfony – All instances created with new keyword must be followed by
    // braces.
    // "new_with_braces",

    // symfony – There should be no empty lines after class opening brace.
    "no_blank_lines_after_class_opening",

    // symfony – There should not be blank lines between docblock and the
    // documented element.
    // "no_empty_lines_after_phpdocs",

    // symfony – There should not be space before or after object
    // T_OBJECT_OPERATOR.
    // "object_operator",

    // symfony – Binary operators should be surrounded by at least one space.
    "operators_spaces",

    // symfony – Docblocks should have the same indentation as the documented
    // subject.
    "phpdoc_indent",

    // symfony – @access annotations should be omitted from phpdocs.
    "phpdoc_no_access",

    // symfony – @return void and @return null annotations should be omitted
    // from phpdocs.
    "phpdoc_no_empty_return",

    // symfony – @package and @subpackage annotations should be omitted from
    // phpdocs.
    "phpdoc_no_package",

    // symfony – All items of the @param, @throws, @return, @var, and @type
    // phpdoc tags must be aligned vertically.
    "phpdoc_params",

    // symfony – Scalar types should always be written in the same form. "int",
    // not "integer"; "bool", not "boolean"; "float", not "real" or "double".
    "phpdoc_scalar",

    // symfony – Annotations in phpdocs should be grouped together so that
    // annotations of the same type immediately follow each other, and
    // annotations of a different type are separated by a single blank line.
    "phpdoc_separation",

    // symfony – Phpdocs short descriptions should end in either a full stop,
    // exclamation mark, or question mark.
    // "phpdoc_short_description",

    // symfony – Docblocks should only be used on structural elements.
    // "phpdoc_to_comment",

    // symfony – Phpdocs should start and end with content, excluding the very
    // first and last line of the docblocks.
    "phpdoc_trim",

    // symfony – @type should always be written as @var.
    "phpdoc_type_to_var",

    // symfony – @var and @type annotations should not contain the variable name.
    "phpdoc_var_without_name",

    // symfony – Pre incrementation/decrementation should be used if possible.
    // "pre_increment",

    // symfony – Remove leading slashes in use clauses.
    "remove_leading_slash_use",

    // symfony – Removes line breaks between use statements.
    // "remove_lines_between_uses",

    // symfony – An empty line feed should precede a return statement.
    "return",

    // symfony – Inside a classy element "self" should be preferred to the class
    // name itself.
    "self_accessor",

    // symfony – PHP single-line arrays should not have trailing comma.
    "single_array_no_trailing_comma",

    // symfony – There should be exactly one blank line before a namespace
    // declaration.
    "single_blank_line_before_namespace",

    // symfony – Convert double quotes to single quotes for simple strings.
    "single_quote",

    // symfony – Single-line whitespace before closing semicolon are prohibited.
    "spaces_before_semicolon",

    // symfony – A single space should be between cast and variable.
    "spaces_cast",

    // symfony – Replace all <> with !=.
    "standardize_not_equal",

    // symfony – Standardize spaces around ternary operator.
    "ternary_spaces",

    // symfony – Arrays should be formatted like function/method arguments,
    // without leading or trailing single line space.
    "trim_array_spaces",

    // symfony – Unalign double arrow symbols.
    "unalign_double_arrow",

    // symfony – Unalign equals symbols.
    "unalign_equals",

    // symfony – Unary operators should be placed adjacent to their operands.
    "unary_operators_spaces",

    // symfony – Unused use statements must be removed.
    "unused_use",

    // symfony – Remove trailing whitespace at the end of blank lines.
    "whitespacy_lines",


    // contrib – Align double arrow symbols in consecutive lines.
    // "align_double_arrow",

    // contrib – Align equals symbols in consecutive lines.
    // "align_equals",

    // contrib – Concatenation should be used with at least one whitespace
    // around.
    "concat_with_spaces",

    // contrib – Replace deprecated ereg regular expression functions with preg.
    // Warning! This could change code behavior.
    // "ereg_to_preg",

    // contrib – Add, replace or remove header comment.
    // "header_comment",

    // contrib – Arrays should use the long syntax.
    // "long_array_syntax",

    // contrib – Multi-line whitespace before closing semicolon are prohibited.
    "multiline_spaces_before_semicolon",

    // contrib – Ensure there is no code on the same line as the PHP open tag.
    "newline_after_open_tag",

    // contrib – There should be no blank lines before a namespace declaration.
    // "no_blank_lines_before_namespace",

    // contrib – Ordering use statements.
    // "ordered_use",

    // contrib – Convert PHP4-style constructors to __construct. Warning! This
    // could change code behavior.
    // "php4_constructor",

    // contrib – Annotations in phpdocs should be ordered so that param
    // annotations come first, then throws annotations, then return annotations.
    "phpdoc_order",

    // contrib – @var should always be written as @type.
    // "phpdoc_var_to_type",

    // contrib – PHP arrays should use the PHP 5.4 short-syntax.
    "short_array_syntax",

    // contrib – Replace short-echo <?= with long format <?php echo syntax.
    // "short_echo_tag",

    // contrib – Comparison should be strict. Warning! This could change code
    // behavior.
    // "strict",

    // contrib – Functions should be used with $strict param. Warning! This
    // could change code behavior.
    // "strict_param"
);

return Symfony\CS\Config\Config::create()
    ->level(Symfony\CS\FixerInterface::NONE_LEVEL)
    ->fixers($fixers)
    ->finder($finder);
