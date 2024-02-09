/* This is a generated file, edit the .stub.php file instead.
 * Stub hash: 7d18782f8e5c6093f303e9f6ea2f350ef40e97f2 */

ZEND_BEGIN_ARG_INFO_EX(arginfo_class_PDO_User_Driver___construct, 0, 0, 4)
	ZEND_ARG_TYPE_INFO(0, dsn, IS_STRING, 0)
	ZEND_ARG_TYPE_INFO(0, user, IS_STRING, 0)
	ZEND_ARG_TYPE_INFO(0, pass, IS_STRING, 0)
	ZEND_ARG_TYPE_INFO(0, options, IS_ARRAY, 0)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_WITH_RETURN_OBJ_TYPE_MASK_EX(arginfo_class_PDO_User_Driver_pdo_prepare, 0, 2, PDO_User_Statement, MAY_BE_FALSE)
	ZEND_ARG_TYPE_INFO(0, sql, IS_STRING, 0)
	ZEND_ARG_TYPE_INFO(0, options, IS_ARRAY, 0)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_WITH_RETURN_TYPE_MASK_EX(arginfo_class_PDO_User_Driver_pdo_do, 0, 1, MAY_BE_FALSE|MAY_BE_LONG)
	ZEND_ARG_TYPE_INFO(0, sql, IS_STRING, 0)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_class_PDO_User_Driver_pdo_quote, 0, 1, IS_STRING, 0)
	ZEND_ARG_TYPE_INFO(0, string, IS_STRING, 0)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_class_PDO_User_Driver_pdo_begin, 0, 0, _IS_BOOL, 0)
ZEND_END_ARG_INFO()

#define arginfo_class_PDO_User_Driver_pdo_commit arginfo_class_PDO_User_Driver_pdo_begin

#define arginfo_class_PDO_User_Driver_pdo_rollback arginfo_class_PDO_User_Driver_pdo_begin

ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_class_PDO_User_Driver_pdo_lastInsertID, 0, 1, IS_STRING, 0)
	ZEND_ARG_TYPE_INFO(0, seq, IS_STRING, 0)
ZEND_END_ARG_INFO()

#define arginfo_class_PDO_User_Driver_pdo_checkLiveness arginfo_class_PDO_User_Driver_pdo_begin

ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_class_PDO_User_Driver_pdo_setAttribute, 0, 2, _IS_BOOL, 0)
	ZEND_ARG_TYPE_INFO(0, attr, IS_LONG, 0)
	ZEND_ARG_TYPE_INFO(0, val, IS_MIXED, 0)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_class_PDO_User_Driver_pdo_getAttribute, 0, 1, IS_MIXED, 0)
	ZEND_ARG_TYPE_INFO(0, attr, IS_LONG, 0)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_class_PDO_User_Driver_pdo_close, 0, 0, IS_VOID, 0)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_class_PDO_User_Driver_pdo_fetchError, 0, 0, IS_ARRAY, 0)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_WITH_RETURN_TYPE_MASK_EX(arginfo_class_PDO_User_Statement_pdo_execute, 0, 0, MAY_BE_FALSE|MAY_BE_ARRAY)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_class_PDO_User_Statement_pdo_fetch, 0, 2, _IS_BOOL, 0)
	ZEND_ARG_TYPE_INFO(0, orientation, IS_LONG, 0)
	ZEND_ARG_TYPE_INFO(0, offset, IS_LONG, 0)
ZEND_END_ARG_INFO()

#define arginfo_class_PDO_User_Statement_pdo_nextRowset arginfo_class_PDO_User_Driver_pdo_begin

ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_class_PDO_User_Statement_pdo_describe, 0, 1, IS_ARRAY, 0)
	ZEND_ARG_TYPE_INFO(0, columnNumber, IS_LONG, 0)
ZEND_END_ARG_INFO()

#define arginfo_class_PDO_User_Statement_pdo_colmeta arginfo_class_PDO_User_Statement_pdo_describe

#define arginfo_class_PDO_User_Statement_pdo_getcol arginfo_class_PDO_User_Statement_pdo_describe

ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_class_PDO_User_Statement_pdo_paramhook, 0, 5, IS_VOID, 0)
	ZEND_ARG_TYPE_INFO(0, event, IS_LONG, 0)
	ZEND_ARG_TYPE_INFO(0, columnNumber, IS_LONG, 0)
	ZEND_ARG_TYPE_INFO(0, columnName, IS_STRING, 0)
	ZEND_ARG_TYPE_INFO(0, isParam, _IS_BOOL, 0)
	ZEND_ARG_TYPE_INFO(1, parameter, IS_MIXED, 0)
ZEND_END_ARG_INFO()

#define arginfo_class_PDO_User_Statement_pdo_setAttribute arginfo_class_PDO_User_Driver_pdo_setAttribute

#define arginfo_class_PDO_User_Statement_pdo_getAttribute arginfo_class_PDO_User_Driver_pdo_getAttribute

#define arginfo_class_PDO_User_Statement_pdo_closeCursor arginfo_class_PDO_User_Driver_pdo_begin

#define arginfo_class_PDO_User_Statement_pdo_close arginfo_class_PDO_User_Driver_pdo_close

ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_class_PDO_User_parseDSN, 0, 2, IS_ARRAY, 0)
	ZEND_ARG_TYPE_INFO(0, dsn, IS_STRING, 0)
	ZEND_ARG_TYPE_INFO(0, params, IS_ARRAY, 0)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_class_PDO_User_driverParam, 0, 1, IS_MIXED, 0)
	ZEND_ARG_TYPE_INFO(0, attribute, IS_LONG, 0)
	ZEND_ARG_TYPE_INFO_WITH_DEFAULT_VALUE(0, value, IS_MIXED, 0, "null")
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_class_PDO_User_tokenizeSQL, 0, 1, IS_ARRAY, 0)
	ZEND_ARG_TYPE_INFO(0, sql, IS_STRING, 0)
	ZEND_ARG_TYPE_INFO_WITH_DEFAULT_VALUE(0, ignore_whitespace, _IS_BOOL, 0, "true")
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_class_PDO_User_tokenName, 0, 1, IS_STRING, 0)
	ZEND_ARG_TYPE_INFO(0, tokenid, IS_LONG, 0)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_class_PDO_User_parseSQL, 0, 1, IS_ARRAY, 0)
	ZEND_ARG_TYPE_INFO(0, sql, IS_STRING, 0)
ZEND_END_ARG_INFO()
