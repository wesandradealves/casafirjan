<?php

namespace Drupal\city_connect_import\Service;

use Drupal\Core\Controller\TitleResolverInterface;
use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\Core\Link;
use Drupal\Core\Logger\LoggerChannel;
use Drupal\Core\Path\CurrentPathStack;
use Drupal\Core\Routing\RouteMatchInterface;
use Drupal\Core\Routing\UrlGeneratorInterface;
use Drupal\Core\StringTranslation\TranslationManager;
use Drupal\path_alias\AliasManagerInterface;
use Symfony\Component\HttpFoundation\RequestStack;

/**
 * Import Menu Service.
 */
class ImportMenu {

  /**
   * The string translation service.
   *
   * @var \Drupal\Core\StringTranslation\TranslationManager
   */
  protected $translationManager;

  /**
   * The request stack.
   *
   * @var \Symfony\Component\HttpFoundation\Request
   */
  protected $request;

  /**
   * The current path.
   *
   * @var \Drupal\Core\Path\CurrentPathStack
   */
  protected $currentPath;

  /**
   * The alias manager.
   *
   * @var \Drupal\path_alias\AliasManagerInterface
   */
  protected $pathAliasManager;

  /**
   * The current route match.
   *
   * @var \Drupal\Core\Routing\RouteMatchInterface
   */
  protected $routeMatch;

  /**
   * The URL generator.
   *
   * @var \Drupal\Core\Routing\UrlGeneratorInterface
   */
  protected $urlGenerator;

  /**
   * The title resolver.
   *
   * @var \Drupal\Core\Controller\TitleResolverInterface
   */
  protected $titleResolver;

  /**
   * The entity type manager.
   *
   * @var \Drupal\Core\Entity\EntityTypeManagerInterface
   */
  protected $entityTypeManager;

  /**
   * The city_connect_import.link_generator service.
   *
   * @var \Drupal\Core\Link
   */
  protected $linkGenerator;

  /**
   * The logger.channel.city_connect_import service.
   *
   * @var \Drupal\Core\Logger\LoggerChannel
   */
  protected $logger;

  /**
   * Constructs an ImportMenu object.
   *
   * @param \Drupal\Core\StringTranslation\TranslationManager $translation_manager
   *   The string translation service.
   * @param \Symfony\Component\HttpFoundation\RequestStack $request_stack
   *   The request stack.
   * @param \Drupal\Core\Path\CurrentPathStack $current_path
   *   The current path.
   * @param \Drupal\path_alias\AliasManagerInterface $alias_manager
   *   The alias manager.
   * @param \Drupal\Core\Routing\RouteMatchInterface $route_match
   *   The current route match.
   * @param \Drupal\Core\Routing\UrlGeneratorInterface $url_generator
   *   The URL generator.
   * @param \Drupal\Core\Controller\TitleResolverInterface $title_resolver
   *   The title resolver.
   * @param \Drupal\Core\Entity\EntityTypeManagerInterface $entity_type_manager
   *   The entity type manager.
   * @param \Drupal\Core\Link $link_generator
   *   The city_connect_import.link_generator service.
   * @param \Drupal\Core\Logger\LoggerChannel $logger
   *   The logger.channel.city_connect_import service.
   */
  public function __construct(
    TranslationManager $translation_manager,
    RequestStack $request_stack,
    CurrentPathStack $current_path,
    AliasManagerInterface $alias_manager,
    RouteMatchInterface $route_match,
    UrlGeneratorInterface $url_generator,
    TitleResolverInterface $title_resolver,
    EntityTypeManagerInterface $entity_type_manager,
    Link $link_generator,
    LoggerChannel $logger,
  ) {
    $this->translationManager = $translation_manager;
    $this->request = $request_stack->getCurrentRequest();
    $this->currentPath = $current_path;
    $this->pathAliasManager = $alias_manager;
    $this->routeMatch = $route_match;
    $this->urlGenerator = $url_generator;
    $this->titleResolver = $title_resolver;
    $this->entityTypeManager = $entity_type_manager;
    $this->linkGenerator = $link_generator;
    $this->logger = $logger;
  }

  /**
   * Method description.
   */
  public function importMenuItem($item) {
    // Return $item['LINK'];
    // return parse_url($item['LINK'])['path'];.
    // $path_alias = $this->pathAliasManager->getAliasByPath($item);
    // return $path_alias;.
    return $this->isUrlInMenu($item['LINK']);
  }

  /**
   * Check if current url is in menu.
   *
   * @param string $item_link
   *   The menu item url.
   *
   * @return true|false
   *   True or false.
   */
  public function isUrlInMenu($item_link): bool {
    try {
      /*
       * \Drupal\menu_item_extras\Entity\MenuItemExtrasMenuLinkContent
       * $menu_result[]
       */
      $menu_result = $this->entityTypeManager->getStorage('menu_link_content')->loadByProperties([
        'menu_name' => 'menu-principal',
        'id' => 164,
      ]);
      return (!empty($menu_result)) ? TRUE : FALSE;
    }
    catch (\Exception $e) {
      $this->logger->critical(
        $this->translationManager->translate('A system error occurred while trying to check if the menu contains the url. For the url [@url].', ["@url" => $item_link])
      );
      $this->logger->error($e->getMessage());
    }
    return FALSE;
  }

  /**
   * Get the current path alias.
   *
   * @return string|null
   *   The current path or null.
   */
  public function getCurrentAlias($item_link): ?string {
    try {
      /*
       * \Drupal\Core\Path\CurrentPathStack $path_current
       * \Drupal\path_alias\AliasManager $path_alias
       */
      // $path_current = $this->pathCurrent->getPath();
      // $path_alias = $this->pathAliasManager->getAliasByPath($path_current);
      // $path_alias = $this->pathAliasManager->getPathByAlias($item_link);
      // $item_link_parts = parse_url($item_link);
      // $path_alias = $this->pathAliasManager->getAliasByPath('/lab-de-tendencias/aquario-casa-firjan/design-para-abundancia-com-michael-braungart');
      $path_alias = $this->pathAliasManager->getAliasByPath('/solucoes-para-empresas/fab-lab-para-empresas');
      return $path_alias;
    }
    catch (\Exception $e) {
      $this->logger->critical(
        $this->translationManager->translate('An error occurred while trying to get the alias of the URL. For the url [@url].', ["@url" => $item_link])
      );
      $this->logger->error($e->getMessage());
    }
    return NULL;
  }

  /**
   * Query the menu tree.
   *
   * @param string $uuid
   *   The menu uuid.
   *
   * @return array|null
   *   The menu item array or null.
   */
  public function getMenuItemByUuid($uuid): ?array {
    try {
      /*
       * \Drupal\menu_item_extras\Entity\MenuItemExtrasMenuLinkContent
       * $menu_result[]
       */
      $menu_result = $this->entityTypeManager->getStorage('menu_link_content')->loadByProperties([
        'menu_name' => 'menu-principal',
        'uuid' => $uuid,
      ]);
      return $menu_result;
    }
    catch (\Exception $e) {
      $this->logger->critical(
        $this->translationManager->translate('A system error occurred while trying to check if the menu contains the url. For the url [@url].', ["@url" => $this->getCurrentUrl()])
      );
      $this->logger->error($e->getMessage());
    }
    return NULL;
  }

  /**
   * Query the menu tree.
   *
   * @param string $link_uri
   *   The menu link_uri.
   *
   * @return array|null
   *   The menu item array or null.
   */
  public function getMenuItemByLinkUri($link_uri): ?array {
    try {
      /*
       * \Drupal\menu_item_extras\Entity\MenuItemExtrasMenuLinkContent
       * $menu_result[]
       */
      $menu_result = $this->entityTypeManager->getStorage('menu_link_content')->loadByProperties([
        'menu_name' => 'menu-principal',
        'link.uri' => 'internal:' . $link_uri,
      ]);
      return $menu_result;
    }
    catch (\Exception $e) {
      $this->logger->critical(
        $this->translationManager->translate('A system error occurred while trying to check if the menu contains the url. For the url [@url].', ["@url" => $this->getCurrentUrl()])
      );
      $this->logger->error($e->getMessage());
    }
    return NULL;
  }

  /**
   * Query the menu tree.
   *
   * @param int $id
   *   The menu id.
   *
   * @return array|null
   *   The menu item array or null.
   */
  public function getMenuItemById($id): ?array {
    try {
      /*
       * \Drupal\menu_item_extras\Entity\MenuItemExtrasMenuLinkContent
       * $menu_result[]
       */
      $menu_result = $this->entityTypeManager->getStorage('menu_link_content')->loadByProperties([
        'menu_name' => 'menu-principal',
        'id' => $id,
      ]);
      return $menu_result;
    }
    catch (\Exception $e) {
      $this->logger->critical(
        $this->translationManager->translate('A system error occurred while trying to check if the menu contains the url. For the url [@url].', ["@url" => $this->getCurrentUrl()])
      );
      $this->logger->error($e->getMessage());
    }
    return NULL;
  }

  /**
   * Query the menu tree.
   *
   * @param string $title
   *   The menu title.
   *
   * @return array|null
   *   The menu item array or null.
   */
  public function getMenuItemByTitle($title): ?array {
    try {
      /*
       * \Drupal\menu_item_extras\Entity\MenuItemExtrasMenuLinkContent
       * $menu_result[]
       */
      $menu_result = $this->entityTypeManager->getStorage('menu_link_content')->loadByProperties([
        'menu_name' => 'menu-principal',
        'title' => $title,
      ]);
      return $menu_result;
    }
    catch (\Exception $e) {
      $this->logger->critical(
        $this->translationManager->translate('A system error occurred while trying to check if the menu contains the url. For the url [@url].', ["@url" => $this->getCurrentUrl()])
      );
      $this->logger->error($e->getMessage());
    }
    return NULL;
  }

}
