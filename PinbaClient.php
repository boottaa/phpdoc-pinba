<?php
/**
 * Helper autocomplete for php pinba extension
 *
 * @author Butta Ahmedov <bootta@yandex.ru>
 * @link https://github.com/boottaa/phpdoc-pinba.git
 */

/**
 * Flush only stopped timers (by default all existing timers are stopped and flushed)
 * @since 1.0.0.
 */
const PINBA_FLUSH_ONLY_STOPPED_TIMERS = 0;

/**
 * Reset common request data
 * @since 1.1.0.
 */
const PINBA_FLUSH_RESET_DATA = 1;

/**
 * @since 1.0.0.
 */
const PINBA_ONLY_STOPPED_TIMERS = 0;

/**
 * Creates and starts new timer.
 *
 * @param array $tags An array of tags and their values in the form of "tag" => "value". Cannot contain numeric indexes for obvious reasons.
 * @param array $data Optional array with user data, not sent to the server.
 *
 * @return resource Always returns new timer resource.
 * @link https://github.com/tony2001/pinba_engine/wiki/PHP-extension#pinba_timer_start
 *
 * @example
 * <pre>
 * $time = pinba_timer_start(array('tag' => 'value'), array('customData', 1, 2));
 * </pre>
 */
function pinba_timer_start(array $tags, array $data = array()) {
};

/**
 * Stops the timer.
 *
 * @param resource $timer Valid timer resource.
 *
 * @return bool Returns true on success and false on failure (if the timer has already been stopped).
 * @link https://github.com/tony2001/pinba_engine/wiki/PHP-extension#pinba_timer_stop
 */
function pinba_timer_stop($timer) {
}

/**
 * Creates new timer. This timer is already stopped and have specified time value.
 *
 * @param array $tags An array of tags and their values in the form of "tag" => "value". Cannot contain numeric indexes for obvious reasons.
 * @param float $value Timer value for new timer.
 * @param array $data Optional array with user data, not sent to the server.
 *
 * @return resource Always returns new timer resource.
 * @link https://github.com/tony2001/pinba_engine/wiki/PHP-extension#pinba_timer_add
 */
function pinba_timer_add(array $tags, $value, array $data = array()) {
}

/**
 * Deletes the timer.
 *
 * @param resource $timer Valid timer resource.
 *
 * @return bool Returns true on success and false on failure.
 * @link https://github.com/tony2001/pinba_engine/wiki/PHP-extension#pinba_timer_delete
 * @since 0.0.6
 */
function pinba_timer_delete($timer) {
}

/**
 * Merges $tags array with the timer tags replacing existing elements.
 *
 * @param resource $timer Valid timer resource
 * @param array $tags An array of tags and their values in the form of "tag" => "value". Cannot contain numeric indexes for obvious reasons.
 *
 * @return bool Returns true on success and false on failure.
 * @link https://github.com/tony2001/pinba_engine/wiki/PHP-extension#pinba_timer_tags_merge
 */
function pinba_timer_tags_merge($timer, array $tags) {
}

/**
 * Replaces timer tags with the passed $tags array.
 *
 * @param resource $timer Valid timer resource
 * @param array $tags An array of tags and their values in the form of "tag" => "value". Cannot contain numeric indexes for obvious reasons.
 *
 * @return bool Returns true on success and false on failure.
 * @link https://github.com/tony2001/pinba_engine/wiki/PHP-extension#pinba_timer_tags_replace
 */
function pinba_timer_tags_replace($timer, array $tags) {
}

/**
 * Merges $data array with the timer user data replacing existing elements.
 *
 * @param resource $timer Valid timer resource
 * @param array $data An array of user data.
 *
 * @return bool Returns true on success and false on failure.
 * @link https://github.com/tony2001/pinba_engine/wiki/PHP-extension#pinba_timer_data_merge
 */
function pinba_timer_data_merge($timer, array $data) {
}


/**
 * Replaces timer user data with the passed $data array.
 * Use NULL value to reset user data in the timer.
 *
 * @param resource $timer Valid timer resource
 * @param array $data An array of user data.
 *
 * @return bool Returns true on success and false on failure.
 * @link https://github.com/tony2001/pinba_engine/wiki/PHP-extension#pinba_timer_data_replace
 */
function pinba_timer_data_replace($timer, array $data) {
}

/**
 * Returns timer data.
 *
 * @param resource $timer Valid timer resource.
 *
 * @return array Array with timer data.
 * @link https://github.com/tony2001/pinba_engine/wiki/PHP-extension#pinba_timer_get_info
 *
 * @example
 * <pre>
 * $data = pinba_timer_get_info($timerRes);
 * //$data == array(
 * //     "value" => 0.0213,
 * //     "tags" => array(
 * //         "foo" => "bar",
 * //     },
 * //      "started" => true,
 * //     "data"  => array('customData', 1, 2),
 * //);
 * </pre>
 */
function pinba_timer_get_info($timer) {
}

/**
 * Stops all running timers.
 *
 * @return bool Returns true on success and false on failure.
 * @link https://github.com/tony2001/pinba_engine/wiki/PHP-extension#pinba_timers_stop
 */
function pinba_timers_stop() {
}

/**
 * Get all timers info.
 *
 * @param int $flags Is an optional argument added in version 1.0.0.
 * Possible values (it's a bitmask, so you can add the constants) is a PINBA_ONLY_STOPPED_TIMERS.
 *
 * @return array Array with all timers data.
 * @link https://github.com/tony2001/pinba_engine/wiki/PHP-extension#pinba_timers_get
 * @since 1.1.0
 */
function pinba_timers_get($flags = PINBA_ONLY_STOPPED_TIMERS) {
}

/**
 * Returns all request data (including timers user data).
 *
 * @return array Requested data
 * @link https://github.com/tony2001/pinba_engine/wiki/PHP-extension#pinba_get_info
 *
 * @example
 * <pre>
 * $data = pinba_get_info();
 * //$data == array(
 * //    "mem_peak_usage" => 786432,
 * //    "req_time" => 0.001529,
 * //    "ru_utime" => 0,
 * //    "ru_stime" => 0,
 * //    "req_count" => 1,
 * //    "doc_size" => 0,
 * //    "server_name" => "unknown",
 * //    "script_name" => "-",
 * //    "timers" =>array(
 * //        array(
 * //            "value" => 4.5E-5,
 * //            "tags" => array("foo" => "bar"),
 * //            "started" => true,
 * //            "data" => null,
 * //        ),
 * //    ),
 * //);
 * </pre>
 */
function pinba_get_info() {
}

/**
 * Set custom script name instead of $_SERVER['SCRIPT_NAME'] used by default.
 * Useful for those using front controllers, when all requests are served by one PHP script.
 *
 * @param string $script_name Custom script name
 *
 * @return bool Returns true on success and false on failure.
 * @link https://github.com/tony2001/pinba_engine/wiki/PHP-extension#pinba_script_name_set
 */
function pinba_script_name_set($script_name) {
}

/**
 * Set custom hostname instead of the result of gethostname() used by default.
 *
 * @param string $hostname Custom host name
 *
 * @return bool Returns true on success and false on failure.
 * @link https://github.com/tony2001/pinba_engine/wiki/PHP-extension#pinba_hostname_set
 */
function pinba_hostname_set($hostname) {
}

/**
 * Useful when you need to send request data to the server immediately (for long running scripts).
 * You can use optional argument script_name to set custom script name.
 *
 * @param string $script_name Custom script name
 * @param int $flags Is an optional argument added in version 1.0.0.
 * Possible values (it's a bitmask, so you can add the constants) is a PINBA_FLUSH_ONLY_STOPPED_TIMERS and
 * PINBA_FLUSH_RESET_DATA.
 *
 * @link https://github.com/tony2001/pinba_engine/wiki/PHP-extension#pinba_flush
 */
function pinba_flush($script_name = '', $flags = PINBA_FLUSH_ONLY_STOPPED_TIMERS) {
}

/**
 * Set request schema (HTTP/HTTPS/whatever).
 *
 * @param string $schema Schema
 *
 * @return bool Returns true on success and false on failure.
 * @link https://github.com/tony2001/pinba_engine/wiki/PHP-extension#pinba_schema_set
 * @since 1.1.0.
 */
function pinba_schema_set($schema) {
}

/**
 * Set custom server name instead of $_SERVER['SERVER_NAME'] used by default.
 *
 * @param string $server_name Custom server name
 *
 * @return bool Returns true on success and false on failure.
 * @link https://github.com/tony2001/pinba_engine/wiki/PHP-extension#pinba_server_name_set
 * @since 1.1.0.
 */
function pinba_server_name_set($server_name) {
}

/**
 * Set custom request time.
 *
 * @param float $request_time
 *
 * @return bool Returns true on success and false on failure.
 * @link https://github.com/tony2001/pinba_engine/wiki/PHP-extension#pinba_request_time_set
 * @since 1.1.0.
 */
function pinba_request_time_set($request_time) {
}

/**
 * Set/update request tag.
 *
 * @param string $tag Custom tag name string
 * @param string $value Tag value
 *
 * @return bool Returns true on success and false on failure.
 * @link https://github.com/tony2001/pinba_engine/wiki/PHP-extension#pinba_tag_set
 * @since 1.1.0.
 */
function pinba_tag_set($tag, $value) {
}

/**
 * Get previously set request tag value.
 *
 * @return string Returns request tag string.
 * @link https://github.com/tony2001/pinba_engine/wiki/PHP-extension#pinba_tag_get
 * @since 1.1.0.
 */
function pinba_tag_get() {
}

/**
 * Delete previously set request tag.
 *
 * @param string $tag Custom tag name string
 *
 * @return bool Returns true on success and false on failure.
 * @link https://github.com/tony2001/pinba_engine/wiki/PHP-extension#pinba_tag_delete
 * @since 1.1.0.
 */
function pinba_tag_delete($tag) {
}

/**
 * Return an array of all previously set request tags.
 *
 * @return array Returns array of all previously set request tags
 * @link https://github.com/tony2001/pinba_engine/wiki/PHP-extension#pinba_tags_get
 * @since 1.1.0.
 */
function pinba_tags_get() {
}



class PinbaClient{

	const PINBA_FLUSH_ONLY_STOPPED_TIMERS = 1;
	const PINBA_FLUSH_RESET_DATA = 2;
	const PINBA_AUTO_FLUSH = 3;

	/**
	* Creates and returns new PinbaClient object.
	* @link https://github.com/tony2001/pinba_engine/wiki/PHP-extension#PinbaClient__construct
	* @param servers - array of strings of hostnames, 'hostname:port' strings or IPv6 hostnames.
	* @param flags - optional flags, bitmask.
	*/
	public function __construct (array $servers, int $flags) {}

	/**
	* Set hostname field in the data packet.
	* @param hostname - hostname
	*/
	public function setHostname(string $hostname) {}

	/**
	* Set server_name field in the data packet.
	* @param server_name - server_name
	*/
	public function setServername(string $server_name) {}

	/**
	* Set script_name field in the data packet.
	* @param script_name - script_name
	*/
	public function setScriptname(string $script_name) {}

	/** 
	* Set schema field in the data packet.
	* @param schema - schema
	*/
	public function setSchema() {}

	/** 
	* Set request_count field in the data packet.
	* @param request_count - request_count
	*/
	public function setRequestCount(int $request_count) {}

	/** 
	* Set memory_footprint field in the data packet.
	* @param memory_footprint - memory_footprint
	*/
	public function setMemoryFootprint(int $memory_footprint) {}

	/** 
	* Set memory_peak field in the data packet.
	* @param memory_peak - memory_peak
	*/
	public function setMemoryPeak(int $memory_peak) {}

	/** 
	* Set document_size field in the data packet.
	* @param document_size - document_size
	*/
	public function setDocumentSize(int $document_size) {}

	/** 
	* Set status field in the data packet.
	* @param status - status
	*/
	public function setStatus(int $status) {}

	/** 
	* Set request_time field in the data packet.
	* @param request_time - request_time
	*/
	public function setRequestTime(float $request_time) {}

	/** 
	* Set rusage field in the data packet.
	* @param rusage - rusage
	*/
	public function setRusage(array $rusage) {}

	/** 
	* Set tag field in the data packet.
	* @param name - name tag
	* @param value - value tag
	*/
	public function setTag(string $name, string $value) {}

	/** 
	* Creates new timer. If there is a timer with the same tags, it's replaced with the newly created one.
	* @param tags - hash of strings with string indexes, which are used as tag names
	* @param value - timer value, seconds
	* @param rusage - array of two numeric items: ru_utime and ru_stime
	* @param hit_count - timer hit count
	*/
	public function setTimer(array $tag, float $value, array $rusage, int $hit_count) {}

	/** 
	* Updates existing timer or creates a new one. If there is a timer with the same tags, we add it and store the sum of the new and the old timers.
	* @param tags - hash of strings with string indexes, which are used as tag names
	* @param value - timer value, seconds
	* @param rusage - array of two numeric items: ru_utime and ru_stime
	* @param hit_count - timer hit count
	*/
	public function addTimer(array $tag, float $value, array $rusage, int $hit_count) {}

	/** 
	* Send the data to the server(s).
	* @param flags - optional flags, bitmask. Override object flags if specified.
	*/
	public function send(int $flags) {}

	/** 
	* Returns raw packet data. This is basically a copy of send(), but instead of sending it just returns the data
	*/
	public function getData() {}

}
