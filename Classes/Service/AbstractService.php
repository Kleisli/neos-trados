<?php
namespace Flownative\Neos\Trados\Service;

/*
 * This file is part of the Flownative.Neos.Trados package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\Flow\Annotations as Flow;

class AbstractService
{
    /**
     * @var string
     */
    const SUPPORTED_FORMAT_VERSION = '1.0';

    /**
     * @Flow\InjectConfiguration(path = "languageDimension")
     * @var string
     */
    protected $languageDimension;

    /**
     * @Flow\InjectConfiguration(path = "export.directory")
     * @var string
     */
    protected string $exportDirectory;

    /**
     * @Flow\InjectConfiguration(path = "import.directory")
     * @var string
     */
    protected string $importDirectory;

    /**
     * @Flow\Inject
     * @var \Neos\Neos\Domain\Service\ContentContextFactory
     */
    protected $contentContextFactory;

    /**
     * @Flow\Inject
     * @var \Neos\Flow\Security\Context
     */
    protected $securityContext;

    /**
     * @Flow\Inject
     * @var \Neos\Neos\Domain\Repository\SiteRepository
     */
    protected $siteRepository;

    /**
     * @Flow\Inject
     * @var \Neos\ContentRepository\Domain\Repository\WorkspaceRepository
     */
    protected $workspaceRepository;

    /**
     * @return string
     */
    public function getExportDirectory(): string
    {
        return $this->exportDirectory;
    }


}
