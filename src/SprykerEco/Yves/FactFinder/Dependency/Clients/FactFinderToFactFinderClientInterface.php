<?php

/**
 * MIT License
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Yves\FactFinder\Dependency\Clients;

use Generated\Shared\Transfer\FactFinderSdkRecommendationRequestTransfer;
use Generated\Shared\Transfer\FactFinderSdkSearchRequestTransfer;
use Generated\Shared\Transfer\FactFinderSdkSuggestRequestTransfer;
use Generated\Shared\Transfer\FactFinderSdkTrackingRequestTransfer;

interface FactFinderToFactFinderClientInterface
{

    /**
     * @param \Generated\Shared\Transfer\FactFinderSdkSearchRequestTransfer $factFinderSearchRequestTransfer
     *
     * @return \Generated\Shared\Transfer\FactFinderSdkSearchResponseTransfer
     */
    public function search(FactFinderSdkSearchRequestTransfer $factFinderSearchRequestTransfer);

    /**
     * @param \Generated\Shared\Transfer\FactFinderSdkRecommendationRequestTransfer $factFinderRecommendationRequestTransfer
     *
     * @return \Generated\Shared\Transfer\FactFinderSdkRecommendationResponseTransfer
     */
    public function getRecommendations(FactFinderSdkRecommendationRequestTransfer $factFinderRecommendationRequestTransfer);

    /**
     * @param \Generated\Shared\Transfer\FactFinderSdkSuggestRequestTransfer $factFinderSuggestRequestTransfer
     *
     * @return \Generated\Shared\Transfer\FactFinderSdkSuggestResponseTransfer
     */
    public function getSuggestions(FactFinderSdkSuggestRequestTransfer $factFinderSuggestRequestTransfer);

    /**
     * @param \Generated\Shared\Transfer\FactFinderSdkTrackingRequestTransfer $factFinderTrackingRequestTransfer
     *
     * @return \Generated\Shared\Transfer\FactFinderSdkTrackingResponseTransfer
     */
    public function track(FactFinderSdkTrackingRequestTransfer $factFinderTrackingRequestTransfer);

}