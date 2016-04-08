<?php

	/**
	 * Created by PhpStorm.
	 * User: Rendszergazda
	 * Date: 2016.03.18.
	 * Time: 23:56
	 */

	class mergeCSS {

	function main($cssPath){

			//Lets define some useful variables
			// --- NOTE: PATHS NEED TRAILING SLASH ---
					//$cssPath = './css/';
			include_once('./debugIncl.php');

			if ( isset( $_GET[ 'q' ] ) ) {
				$files = $_GET[ 'q' ];
				// Got the array of files!

				//Lets just make sure that the files don't contain any nasty characters.
				foreach ( $files as $key => $file ) {
					$files[ $key ] = str_replace( array( '/', '\\', '.' ), '', $file );
				}

				$cssData = '';
				foreach ( $files as $file ) {
					$cssFileName = $cssPath . $file . '.css';
					$fileHandle  = fopen( $cssFileName, 'r' );
					$cssData .= "\n" . fread( $fileHandle, filesize( $cssFileName ) );
					fclose( $fileHandle );
				}
			}

			// Tell the browser that we have a CSS file and send the data.
			header( "Content-type: text/css" );
			if ( isset( $cssData ) ) {
				echo $cssData;
//				echo "\n\n// Generated: " . date( "r" );
				$_set = "\n\n// Generated: " . date( "r" );
				nestedCallDivPrint($_set,"s");
				nestedCallDivPrint("debug: $cssData is: \n ".$cssData,"i");
			}
			else {
				$_set = "// Files not avalable or no files specified.";
				nestedCallDivPrint($_set,"s");
			}

		return TRUE;
	}
} 