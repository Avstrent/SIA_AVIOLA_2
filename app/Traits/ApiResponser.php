<?php
namespace App\Traits;
use Illuminate\Http\Response;
trait ApiResponser
{
 /**
 * Build success response
 * @param string|array $data
 * @param int $code
 * @return Illuminate\Http\JsonResponse
 */
 public function successResponse($data, $code = Response::HTTP_OK)
 {
<<<<<<< HEAD
 return response()->json(['data' => $data, 'site' => 2], $code);
=======
 return response()->json(['data' => $data, 'site' => 1], $code);
>>>>>>> 6e25572d03a35f1b86aaf6ba1d65d374d471c6b4
 }
 /**
 * Build error responses
 * @param string|array $message
 * @param int $code
 * @return Illuminate\Http\JsonResponse
 */
 public function errorResponse($message, $code)

 {
<<<<<<< HEAD
 return response()->json(['error' => $message, 'site' => 2],
=======
 return response()->json(['error' => $message, 'site' => 1],
>>>>>>> 6e25572d03a35f1b86aaf6ba1d65d374d471c6b4
$code);
 }
}