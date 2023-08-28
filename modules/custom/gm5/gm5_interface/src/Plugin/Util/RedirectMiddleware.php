<?php

namespace Drupal\gm5_interface\Plugin\Util;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\HttpKernelInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Drupal\Core\Routing\TrustedRedirectResponse;
use Drupal\Core\Url;

/**
 * Executes redirect before the main kernel takes over the request.
 */
class RedirectMiddleware implements HttpKernelInterface {

  /**
   * The wrapped HTTP kernel.
   *
   * @var \Symfony\Component\HttpKernel\HttpKernelInterface
   */
  protected $httpKernel;

  /**
   * The redirect URL.
   *
   * @var \Symfony\Component\HttpFoundation\RedirectResponse
   */
  protected $redirectResponse;

  /**
   * Constructs a RedirectMiddleware
   * object.
   *
   * @param \Symfony\Component\HttpKernel\HttpKernelInterface $http_kernel
   *   The decorated kernel.
   */
  public function __construct(HttpKernelInterface $http_kernel) {
    $this->httpKernel = $http_kernel;
  }

  /**
   * {@inheritdoc}
   */
  public function handle(Request $request, $type = self::MASTER_REQUEST, $catch = TRUE) {
    $response = $this->httpKernel->handle($request, $type, $catch);
    return $this->redirectResponse ?: $response;
  }

  /**
   * Stores the requested redirect response.
   *
   * @param \Symfony\Component\HttpFoundation\RedirectResponse|null $redirectResponse
   *   Redirect response.
   */
  public function setRedirectResponse(?RedirectResponse $redirectResponse) {
    $this->redirectResponse = $redirectResponse;
  }

}
