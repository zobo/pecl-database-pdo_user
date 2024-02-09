<?php

interface PDO_User_Driver {
	public function __construct(string $dsn, string $user, string $pass, array $options) {
		/* new PDO('user:driver=classname;...') */
	}

	public function pdo_prepare(string $sql, array $options): false|PDO_User_Statement {
		/* PDO::prepare() or PDO::query() */

		if (SUCCESS) {
			return new Object_Implementing_PDO_User_Statement($optional, $parameters);
		} else {
			/* If your class will be unable to perform the query, return false here to indicate failure */
			return false;
		}
	}

	public function pdo_do(string $sql): false|int {
		/* PDO::exec() */
		if (SUCCESS) {
			return $rowsAffected;
		} else {
			return FALSE; /* NULL or a negative number may also be used to indicate failure */
		}
	}

	public function pdo_quote(string $string): string {
		/* PDO::quote() */

		/* There is no "failure" mode for this method, you must return something */
		return $modifiedString;
	}

	public function pdo_begin(): bool {
		/* PDO::beginTransaction() */
		if (SUCCESS) {
			return true;
		} else {
			return false;
		}
	}

	public function pdo_commit(): bool {
		/* PDO::commit() */
		if (SUCCESS) {
			return true;
		} else {
			return false;
		}
	}

	public function pdo_rollback(): bool {
		/* PDO::rollBack() */
		if (SUCCESS) {
			return true;
		} else {
			return false;
		}
	}

	public function pdo_lastInsertID(string $seq): string {
		/* PDO::lastInsertID() */

		/* There is no "failure" mode for this method, you must return something */
		return $lastIDString;
	}

	public function pdo_checkLiveness(): bool {
		/* Called by PDO internally */
		return $driverIsAliveBool;
	}

	public function pdo_setAttribute(int $attr, mixed $val): bool {
		/* PDO::setAttribute($attr, $val) */

		/* $attr == PDO::ATTR_* */
		if (SUCCESS) {
			return true;
		} else {
			return false;
		}
	}

	public function pdo_getAttribute(int $attr): mixed {
		/* PDO::getAttribute($attr) */

		/* $attr == PDO::ATTR_* */
		if (SUCCESS) {
			return $attributeValue;
		} else {
			return false;
		}
	}

	public function pdo_close(): void {
		/* Called when shutting down a database handle - e.g. unset($pdoHandle); */

		/* Return value ignored */
	}

	public function pdo_fetchError(): array {
		/* PDO::errorInfo */

		return array(0 => 12345, 1 => 'Error 12345 has occured...blah...blah...blah');
	}
}

interface PDO_User_Statement {
	public function pdo_execute(): false|array {
		/* PDO_Statement::execute() */

		/* The result of emulated bound parameters may be retreived via: */
		$resultQuery = PDO_User::statementParam($this, PDO_User::STATEMENT_PARAM_ACTIVE_QUERY);

		if (SUCCESS) {
			return array('rows' => $numberOfRowsInSet, 'cols' => $numberOfColsInSet);
		} else {
			return false;
		}
	}

	public function pdo_fetch(int $orientation, int $offset): bool {
		/* PDO_Statement::fetch() and family */

		/* This method should only adjust the current cursor's position,
		 * getcol() will be used to actually retreive the data */

		/* $orientation is one of PDO::FETCH_ORI_*
		 * $offset is a relative position to the location tagged by $orientation */
		if (SUCCESS) {
			return true;
		} else {
			/* e.g. - No more rows */
			return false;
		}
	}

	public function pdo_nextRowset(): bool {
		/* PDO_Statement::nextRowset() */

		if (SUCCESS) {
			return true;
		} else {
			return false;
		}
	}

	public function pdo_describe(int $columnNumber): array {
		/* Called after PDO_Statement::execute() to determine column names,
		 * also used by PDO_Statement::getColumnMeta() */
		return array('name' => $nameOfColumn, 'maxlen' => $maximumLengthOfDataInColumn);
	}

	public function pdo_colmeta(int $columnNumber): array {
		/* PDO_Statement::getColumnMeta() */
		/* Return as many of the supported fields as possible,
		 * custom fields may also be returned by prefixing with user: */
		return array('scale' => $floatingPointScale,
					 'table' => $sourceTable,
					 'type' => $phpTypeName, /* e.g. 'string', 'integer', 'bool' */
					 'native_type' => $dbTypeName, /* e.g. 'char', 'blog', 'double' */
					 'flags' => array(	'primary_key',
										'not_null',
										'unique_key',
										'multiple_key',
										'unsigned',
										'auto_increment',
										'blob',
										'user:foo', /* custom flag(s) */
									),
					'user:bar' => 'baz' /* custom metadata(s) */
			);
	}

	public function pdo_getcol(int $columnNumber): array {
		/* Called by PDO_Statement::fetch() family of functions */

		return $contentsOfColumnForCurrentRow;
	}

	public function pdo_paramhook(int $event, int $columnNumber, string $columnName, bool $isParam, mixed &$parameter): void {
		/* Called before and after EXEC and FETCH events */
		/* $event is one of PDO::PARAM_EVT_EXEC_* or PDO_PARAM_EVT_FETCH_*
		 * $columnNumber / $columnName are the identifiers of the column, either or both may be available
		 * $isParam is TRUE for placeholder parameters (e.g. WHERE foo = ?), it is FALSE for result parameters (e.g. SELECT col1)
		 * $parameter is the actual bound variable and is always passed by reference */

		/* Return value is ignored */
	}

	public function pdo_setAttribute(int $attr, mixed $val): bool {
		/* PDO_Statement::setAttribute($attr, $val) */

		/* $attr == PDO::ATTR_* */
		if (SUCCESS) {
			return true;
		} else {
			return false;
		}
	}

	public function pdo_getAttribute(int $attr): mixed {
		/* PDO_Statement::getAttribute($attr) */

		/* $attr == PDO::ATTR_* */
		if (SUCCESS) {
			return $attributeValue;
		} else {
			return false;
		}
	}

	public function pdo_closeCursor(): bool {
		/* PDO_Statement::closeCursor() */

		if (SUCCESS) {
			return true;
		} else {
			return false;
		}
	}

	public function pdo_close(): void {
		/* Called with shutting down a statement */

		/* Return value ignored */
	}
}

class PDO_User {
	public function parseDSN(string $dsn, array $params): array {
		/* Parses a DSN string in the format: var1=val1;var2=val2;var3=val3;...
		 * For the variables named in $params, For example:

			$result = PDO_User::parseDSN('host=localhost;port=3306', array('host','port'));
			print_r($result);

		 * Results in:

			Array(2) {
				[host] => localhost
				[port] => 3306
			}

		 */
	}

	public function driverParam(int $attribute, mixed $value = null): mixed {
		/* $attribute is one of:
			PDO_User::DRIVER_PARAM_MAX_ESCAPSED_CHAR_LENGTH		(used by emulated prepared statement routines internally)
			PDO_User::DRIVER_PARAM_DATA_SOURCE					(refers to the $dsn passed to the driver class' constructor)
			PDO_User::DRIVER_PARAM_SQLSTATE						(Driver's current SQLSTATE value)

			PDO_User::STATEMENT_PARAM_ACTIVE_QUERY				(Post-transformation emulated prepared statement result)
			PDO_User::STATEMENT_PARAM_SQLSTATE					(Statement's current SQLSTATE value)
		 
		 * When $value is passed, the parameter will be set to this new value
		 * Whether or not $value is passed, the current value will be returned */
	}

	public function tokenizeSQL(string $sql, bool $ignore_whitespace = true): array {
		/* Split a standard SQL statement into token pieces interpolating some escape sequences in ``, '', and "" pairs
			\\		Literal backslash
			\000	Interpolated to character with identified octal value
			\x00	Interpolated to character with identified hex value
			\r		Carriage Return (0x0D)
			\n		Line Feed (0x0A)
			\t		Tab (0x09)
			\'		Single Quote (Only interpolated within '' strings)
			\"		Double Quote (Only interpolated within "" strings)
			\`		Backtick (Only interpolated witin `` strings)

			Any other escape sequence will be interpolated as it's literal value, e.g.:
			\a		Literal backslash followed by the letter a

			Returns a 2D array of arrays containing the token id and the source text it came from. */
	}

	public function tokenName(int $tokenid): string {
		/* Returns the textual name of the token ID returned by tokenizeSQL(), e.g.:
			PU_SELECT
			PU_STRING
			PU_WHITESPACE
			etc... */
	}

	public function parseSQL(string $sql): array {
		/* Parse a standard SQL string into a query expression tree */
	}
}
