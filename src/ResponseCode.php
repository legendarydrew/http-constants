<?php
namespace PZL\Http;

class ResponseCode
{
    const RESPONSE_CONTINUE                                                  = 100;
    const RESPONSE_SWITCHING_PROTOCOLS                                       = 101;
    const RESPONSE_PROCESSING                                                = 102; // RFC2518
    const RESPONSE_OK                                                        = 200;
    const RESPONSE_CREATED                                                   = 201;
    const RESPONSE_ACCEPTED                                                  = 202;
    const RESPONSE_NON_AUTHORITATIVE_INFORMATION                             = 203;
    const RESPONSE_NO_CONTENT                                                = 204;
    const RESPONSE_RESET_CONTENT                                             = 205;
    const RESPONSE_PARTIAL_CONTENT                                           = 206;
    const RESPONSE_MULTI_STATUS                                              = 207; // RFC4918
    const RESPONSE_ALREADY_REPORTED                                          = 208; // RFC5842
    const RESPONSE_IM_USED                                                   = 226; // RFC3229
    const RESPONSE_MULTIPLE_CHOICES                                          = 300;
    const RESPONSE_MOVED_PERMANENTLY                                         = 301;
    const RESPONSE_FOUND                                                     = 302;
    const RESPONSE_SEE_OTHER                                                 = 303;
    const RESPONSE_NOT_MODIFIED                                              = 304;
    const RESPONSE_USE_PROXY                                                 = 305;
    const RESPONSE_RESERVED                                                  = 306;
    const RESPONSE_TEMPORARY_REDIRECT                                        = 307;
    const RESPONSE_PERMANENTLY_REDIRECT                                      = 308; // RFC7238
    const RESPONSE_BAD_REQUEST                                               = 400;
    const RESPONSE_UNAUTHORIZED                                              = 401;
    const RESPONSE_PAYMENT_REQUIRED                                          = 402;
    const RESPONSE_FORBIDDEN                                                 = 403;
    const RESPONSE_NOT_FOUND                                                 = 404;
    const RESPONSE_METHOD_NOT_ALLOWED                                        = 405;
    const RESPONSE_NOT_ACCEPTABLE                                            = 406;
    const RESPONSE_PROXY_AUTHENTICATION_REQUIRED                             = 407;
    const RESPONSE_REQUEST_TIMEOUT                                           = 408;
    const RESPONSE_CONFLICT                                                  = 409;
    const RESPONSE_GONE                                                      = 410;
    const RESPONSE_LENGTH_REQUIRED                                           = 411;
    const RESPONSE_PRECONDITION_FAILED                                       = 412;
    const RESPONSE_REQUEST_ENTITY_TOO_LARGE                                  = 413;
    const RESPONSE_REQUEST_URI_TOO_LONG                                      = 414;
    const RESPONSE_UNSUPPORTED_MEDIA_TYPE                                    = 415;
    const RESPONSE_REQUESTED_RANGE_NOT_SATISFIABLE                           = 416;
    const RESPONSE_EXPECTATION_FAILED                                        = 417;
    const RESPONSE_I_AM_A_TEAPOT                                             = 418; // RFC2324
    const RESPONSE_MISDIRECTED_REQUEST                                       = 421; // RFC7540
    const RESPONSE_UNPROCESSABLE_ENTITY                                      = 422; // RFC4918
    const RESPONSE_LOCKED                                                    = 423; // RFC4918
    const RESPONSE_FAILED_DEPENDENCY                                         = 424; // RFC4918
    const RESPONSE_RESERVED_FOR_WEBDAV_ADVANCED_COLLECTIONS_EXPIRED_PROPOSAL = 425; // RFC2817
    const RESPONSE_UPGRADE_REQUIRED                                          = 426; // RFC2817
    const RESPONSE_PRECONDITION_REQUIRED                                     = 428; // RFC6585
    const RESPONSE_TOO_MANY_REQUESTS                                         = 429; // RFC6585
    const RESPONSE_REQUEST_HEADER_FIELDS_TOO_LARGE                           = 431; // RFC6585
    const RESPONSE_UNAVAILABLE_FOR_LEGAL_REASONS                             = 451;
    const RESPONSE_INTERNAL_SERVER_ERROR                                     = 500;
    const RESPONSE_NOT_IMPLEMENTED                                           = 501;
    const RESPONSE_BAD_GATEWAY                                               = 502;
    const RESPONSE_SERVICE_UNAVAILABLE                                       = 503;
    const RESPONSE_GATEWAY_TIMEOUT                                           = 504;
    const RESPONSE_VERSION_NOT_SUPPORTED                                     = 505;
    const RESPONSE_VARIANT_ALSO_NEGOTIATES_EXPERIMENTAL                      = 506; // RFC2295
    const RESPONSE_INSUFFICIENT_STORAGE                                      = 507; // RFC4918
    const RESPONSE_LOOP_DETECTED                                             = 508; // RFC5842
    const RESPONSE_NOT_EXTENDED                                              = 510; // RFC2774
    const RESPONSE_NETWORK_AUTHENTICATION_REQUIRED                           = 511; // RFC6585
}
