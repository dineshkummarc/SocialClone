<?php
// This file was auto-generated from sdk-root/src/data/trustedadvisor/2022-09-15/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2022-09-15', 'endpointPrefix' => 'trustedadvisor', 'jsonVersion' => '1.1', 'protocol' => 'rest-json', 'serviceFullName' => 'TrustedAdvisor Public API', 'serviceId' => 'TrustedAdvisor', 'signatureVersion' => 'v4', 'signingName' => 'trustedadvisor', 'uid' => 'trustedadvisor-2022-09-15', ], 'operations' => [ 'BatchUpdateRecommendationResourceExclusion' => [ 'name' => 'BatchUpdateRecommendationResourceExclusion', 'http' => [ 'method' => 'PUT', 'requestUri' => '/v1/batch-update-recommendation-resource-exclusion', 'responseCode' => 200, ], 'input' => [ 'shape' => 'BatchUpdateRecommendationResourceExclusionRequest', ], 'output' => [ 'shape' => 'BatchUpdateRecommendationResourceExclusionResponse', ], 'errors' => [ [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ThrottlingException', ], ], 'idempotent' => true, ], 'GetOrganizationRecommendation' => [ 'name' => 'GetOrganizationRecommendation', 'http' => [ 'method' => 'GET', 'requestUri' => '/v1/organization-recommendations/{organizationRecommendationIdentifier}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'GetOrganizationRecommendationRequest', ], 'output' => [ 'shape' => 'GetOrganizationRecommendationResponse', ], 'errors' => [ [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], ], ], 'GetRecommendation' => [ 'name' => 'GetRecommendation', 'http' => [ 'method' => 'GET', 'requestUri' => '/v1/recommendations/{recommendationIdentifier}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'GetRecommendationRequest', ], 'output' => [ 'shape' => 'GetRecommendationResponse', ], 'errors' => [ [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], ], ], 'ListChecks' => [ 'name' => 'ListChecks', 'http' => [ 'method' => 'GET', 'requestUri' => '/v1/checks', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListChecksRequest', ], 'output' => [ 'shape' => 'ListChecksResponse', ], 'errors' => [ [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ThrottlingException', ], ], ], 'ListOrganizationRecommendationAccounts' => [ 'name' => 'ListOrganizationRecommendationAccounts', 'http' => [ 'method' => 'GET', 'requestUri' => '/v1/organization-recommendations/{organizationRecommendationIdentifier}/accounts', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListOrganizationRecommendationAccountsRequest', ], 'output' => [ 'shape' => 'ListOrganizationRecommendationAccountsResponse', ], 'errors' => [ [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], ], ], 'ListOrganizationRecommendationResources' => [ 'name' => 'ListOrganizationRecommendationResources', 'http' => [ 'method' => 'GET', 'requestUri' => '/v1/organization-recommendations/{organizationRecommendationIdentifier}/resources', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListOrganizationRecommendationResourcesRequest', ], 'output' => [ 'shape' => 'ListOrganizationRecommendationResourcesResponse', ], 'errors' => [ [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], ], ], 'ListOrganizationRecommendations' => [ 'name' => 'ListOrganizationRecommendations', 'http' => [ 'method' => 'GET', 'requestUri' => '/v1/organization-recommendations', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListOrganizationRecommendationsRequest', ], 'output' => [ 'shape' => 'ListOrganizationRecommendationsResponse', ], 'errors' => [ [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ThrottlingException', ], ], ], 'ListRecommendationResources' => [ 'name' => 'ListRecommendationResources', 'http' => [ 'method' => 'GET', 'requestUri' => '/v1/recommendations/{recommendationIdentifier}/resources', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListRecommendationResourcesRequest', ], 'output' => [ 'shape' => 'ListRecommendationResourcesResponse', ], 'errors' => [ [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], ], ], 'ListRecommendations' => [ 'name' => 'ListRecommendations', 'http' => [ 'method' => 'GET', 'requestUri' => '/v1/recommendations', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListRecommendationsRequest', ], 'output' => [ 'shape' => 'ListRecommendationsResponse', ], 'errors' => [ [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ThrottlingException', ], ], ], 'UpdateOrganizationRecommendationLifecycle' => [ 'name' => 'UpdateOrganizationRecommendationLifecycle', 'http' => [ 'method' => 'PUT', 'requestUri' => '/v1/organization-recommendations/{organizationRecommendationIdentifier}/lifecycle', 'responseCode' => 200, ], 'input' => [ 'shape' => 'UpdateOrganizationRecommendationLifecycleRequest', ], 'errors' => [ [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], ], 'idempotent' => true, ], 'UpdateRecommendationLifecycle' => [ 'name' => 'UpdateRecommendationLifecycle', 'http' => [ 'method' => 'PUT', 'requestUri' => '/v1/recommendations/{recommendationIdentifier}/lifecycle', 'responseCode' => 200, ], 'input' => [ 'shape' => 'UpdateRecommendationLifecycleRequest', ], 'errors' => [ [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], ], 'idempotent' => true, ], ], 'shapes' => [ 'AccessDeniedException' => [ 'type' => 'structure', 'required' => [ 'message', ], 'members' => [ 'message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 403, 'senderFault' => true, ], 'exception' => true, ], 'AccountId' => [ 'type' => 'string', 'max' => 12, 'min' => 12, 'pattern' => '^\\d+$', ], 'AccountRecommendationArn' => [ 'type' => 'string', 'max' => 2048, 'min' => 20, 'pattern' => '^arn:[\\w-]+:trustedadvisor::\\d{12}:recommendation\\/[\\w-]+$', ], 'AccountRecommendationIdentifier' => [ 'type' => 'string', 'max' => 200, 'min' => 20, 'pattern' => '^arn:[\\w-]+:trustedadvisor::\\d{12}:recommendation\\/[\\w-]+$', ], 'AccountRecommendationLifecycleSummary' => [ 'type' => 'structure', 'members' => [ 'accountId' => [ 'shape' => 'AccountId', ], 'accountRecommendationArn' => [ 'shape' => 'AccountRecommendationArn', ], 'lastUpdatedAt' => [ 'shape' => 'SyntheticTimestamp_date_time', ], 'lifecycleStage' => [ 'shape' => 'RecommendationLifecycleStage', ], 'updateReason' => [ 'shape' => 'RecommendationUpdateReason', ], 'updateReasonCode' => [ 'shape' => 'UpdateRecommendationLifecycleStageReasonCode', ], 'updatedOnBehalfOf' => [ 'shape' => 'String', ], 'updatedOnBehalfOfJobTitle' => [ 'shape' => 'String', ], ], ], 'AccountRecommendationLifecycleSummaryList' => [ 'type' => 'list', 'member' => [ 'shape' => 'AccountRecommendationLifecycleSummary', ], ], 'BatchUpdateRecommendationResourceExclusionRequest' => [ 'type' => 'structure', 'required' => [ 'recommendationResourceExclusions', ], 'members' => [ 'recommendationResourceExclusions' => [ 'shape' => 'RecommendationResourceExclusionList', ], ], ], 'BatchUpdateRecommendationResourceExclusionResponse' => [ 'type' => 'structure', 'required' => [ 'batchUpdateRecommendationResourceExclusionErrors', ], 'members' => [ 'batchUpdateRecommendationResourceExclusionErrors' => [ 'shape' => 'UpdateRecommendationResourceExclusionErrorList', ], ], ], 'Boolean' => [ 'type' => 'boolean', 'box' => true, ], 'CheckArn' => [ 'type' => 'string', 'max' => 2048, 'min' => 20, 'pattern' => '^arn:[\\w-]+:trustedadvisor:::check\\/[\\w-]+$', ], 'CheckIdentifier' => [ 'type' => 'string', 'max' => 64, 'min' => 20, 'pattern' => '^arn:[\\w-]+:trustedadvisor:::check\\/[\\w-]+$', ], 'CheckSummary' => [ 'type' => 'structure', 'required' => [ 'arn', 'awsServices', 'description', 'id', 'metadata', 'name', 'pillars', 'source', ], 'members' => [ 'arn' => [ 'shape' => 'CheckArn', ], 'awsServices' => [ 'shape' => 'RecommendationAwsServiceList', ], 'description' => [ 'shape' => 'String', ], 'id' => [ 'shape' => 'String', ], 'metadata' => [ 'shape' => 'StringMap', ], 'name' => [ 'shape' => 'String', ], 'pillars' => [ 'shape' => 'RecommendationPillarList', ], 'source' => [ 'shape' => 'RecommendationSource', ], ], ], 'CheckSummaryList' => [ 'type' => 'list', 'member' => [ 'shape' => 'CheckSummary', ], ], 'ConflictException' => [ 'type' => 'structure', 'required' => [ 'message', ], 'members' => [ 'message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 409, 'senderFault' => true, ], 'exception' => true, ], 'Double' => [ 'type' => 'double', 'box' => true, ], 'ExclusionStatus' => [ 'type' => 'string', 'enum' => [ 'excluded', 'included', ], ], 'GetOrganizationRecommendationRequest' => [ 'type' => 'structure', 'required' => [ 'organizationRecommendationIdentifier', ], 'members' => [ 'organizationRecommendationIdentifier' => [ 'shape' => 'OrganizationRecommendationIdentifier', 'location' => 'uri', 'locationName' => 'organizationRecommendationIdentifier', ], ], ], 'GetOrganizationRecommendationResponse' => [ 'type' => 'structure', 'members' => [ 'organizationRecommendation' => [ 'shape' => 'OrganizationRecommendation', ], ], ], 'GetRecommendationRequest' => [ 'type' => 'structure', 'required' => [ 'recommendationIdentifier', ], 'members' => [ 'recommendationIdentifier' => [ 'shape' => 'AccountRecommendationIdentifier', 'location' => 'uri', 'locationName' => 'recommendationIdentifier', ], ], ], 'GetRecommendationResponse' => [ 'type' => 'structure', 'members' => [ 'recommendation' => [ 'shape' => 'Recommendation', ], ], ], 'InternalServerException' => [ 'type' => 'structure', 'required' => [ 'message', ], 'members' => [ 'message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 500, ], 'exception' => true, 'fault' => true, 'retryable' => [ 'throttling' => false, ], ], 'ListChecksRequest' => [ 'type' => 'structure', 'members' => [ 'awsService' => [ 'shape' => 'RecommendationAwsService', 'location' => 'querystring', 'locationName' => 'awsService', ], 'language' => [ 'shape' => 'RecommendationLanguage', 'location' => 'querystring', 'locationName' => 'language', ], 'maxResults' => [ 'shape' => 'ListChecksRequestMaxResultsInteger', 'location' => 'querystring', 'locationName' => 'maxResults', ], 'nextToken' => [ 'shape' => 'ListChecksRequestNextTokenString', 'location' => 'querystring', 'locationName' => 'nextToken', ], 'pillar' => [ 'shape' => 'RecommendationPillar', 'location' => 'querystring', 'locationName' => 'pillar', ], 'source' => [ 'shape' => 'RecommendationSource', 'location' => 'querystring', 'locationName' => 'source', ], ], ], 'ListChecksRequestMaxResultsInteger' => [ 'type' => 'integer', 'box' => true, 'max' => 200, 'min' => 1, ], 'ListChecksRequestNextTokenString' => [ 'type' => 'string', 'max' => 10000, 'min' => 4, ], 'ListChecksResponse' => [ 'type' => 'structure', 'required' => [ 'checkSummaries', ], 'members' => [ 'checkSummaries' => [ 'shape' => 'CheckSummaryList', ], 'nextToken' => [ 'shape' => 'ListChecksResponseNextTokenString', ], ], ], 'ListChecksResponseNextTokenString' => [ 'type' => 'string', 'max' => 10000, 'min' => 4, ], 'ListOrganizationRecommendationAccountsRequest' => [ 'type' => 'structure', 'required' => [ 'organizationRecommendationIdentifier', ], 'members' => [ 'affectedAccountId' => [ 'shape' => 'AccountId', 'location' => 'querystring', 'locationName' => 'affectedAccountId', ], 'maxResults' => [ 'shape' => 'ListOrganizationRecommendationAccountsRequestMaxResultsInteger', 'location' => 'querystring', 'locationName' => 'maxResults', ], 'nextToken' => [ 'shape' => 'ListOrganizationRecommendationAccountsRequestNextTokenString', 'location' => 'querystring', 'locationName' => 'nextToken', ], 'organizationRecommendationIdentifier' => [ 'shape' => 'OrganizationRecommendationIdentifier', 'location' => 'uri', 'locationName' => 'organizationRecommendationIdentifier', ], ], ], 'ListOrganizationRecommendationAccountsRequestMaxResultsInteger' => [ 'type' => 'integer', 'box' => true, 'max' => 200, 'min' => 1, ], 'ListOrganizationRecommendationAccountsRequestNextTokenString' => [ 'type' => 'string', 'max' => 10000, 'min' => 4, ], 'ListOrganizationRecommendationAccountsResponse' => [ 'type' => 'structure', 'required' => [ 'accountRecommendationLifecycleSummaries', ], 'members' => [ 'accountRecommendationLifecycleSummaries' => [ 'shape' => 'AccountRecommendationLifecycleSummaryList', ], 'nextToken' => [ 'shape' => 'ListOrganizationRecommendationAccountsResponseNextTokenString', ], ], ], 'ListOrganizationRecommendationAccountsResponseNextTokenString' => [ 'type' => 'string', 'max' => 10000, 'min' => 4, ], 'ListOrganizationRecommendationResourcesRequest' => [ 'type' => 'structure', 'required' => [ 'organizationRecommendationIdentifier', ], 'members' => [ 'affectedAccountId' => [ 'shape' => 'AccountId', 'location' => 'querystring', 'locationName' => 'affectedAccountId', ], 'exclusionStatus' => [ 'shape' => 'ExclusionStatus', 'location' => 'querystring', 'locationName' => 'exclusionStatus', ], 'maxResults' => [ 'shape' => 'ListOrganizationRecommendationResourcesRequestMaxResultsInteger', 'location' => 'querystring', 'locationName' => 'maxResults', ], 'nextToken' => [ 'shape' => 'ListOrganizationRecommendationResourcesRequestNextTokenString', 'location' => 'querystring', 'locationName' => 'nextToken', ], 'organizationRecommendationIdentifier' => [ 'shape' => 'OrganizationRecommendationIdentifier', 'location' => 'uri', 'locationName' => 'organizationRecommendationIdentifier', ], 'regionCode' => [ 'shape' => 'String', 'location' => 'querystring', 'locationName' => 'regionCode', ], 'status' => [ 'shape' => 'ResourceStatus', 'location' => 'querystring', 'locationName' => 'status', ], ], ], 'ListOrganizationRecommendationResourcesRequestMaxResultsInteger' => [ 'type' => 'integer', 'box' => true, 'max' => 200, 'min' => 1, ], 'ListOrganizationRecommendationResourcesRequestNextTokenString' => [ 'type' => 'string', 'max' => 10000, 'min' => 4, ], 'ListOrganizationRecommendationResourcesResponse' => [ 'type' => 'structure', 'required' => [ 'organizationRecommendationResourceSummaries', ], 'members' => [ 'nextToken' => [ 'shape' => 'ListOrganizationRecommendationResourcesResponseNextTokenString', ], 'organizationRecommendationResourceSummaries' => [ 'shape' => 'OrganizationRecommendationResourceSummaryList', ], ], ], 'ListOrganizationRecommendationResourcesResponseNextTokenString' => [ 'type' => 'string', 'max' => 10000, 'min' => 4, ], 'ListOrganizationRecommendationsRequest' => [ 'type' => 'structure', 'members' => [ 'afterLastUpdatedAt' => [ 'shape' => 'Timestamp', 'location' => 'querystring', 'locationName' => 'afterLastUpdatedAt', ], 'awsService' => [ 'shape' => 'RecommendationAwsService', 'location' => 'querystring', 'locationName' => 'awsService', ], 'beforeLastUpdatedAt' => [ 'shape' => 'Timestamp', 'location' => 'querystring', 'locationName' => 'beforeLastUpdatedAt', ], 'checkIdentifier' => [ 'shape' => 'CheckIdentifier', 'location' => 'querystring', 'locationName' => 'checkIdentifier', ], 'maxResults' => [ 'shape' => 'ListOrganizationRecommendationsRequestMaxResultsInteger', 'location' => 'querystring', 'locationName' => 'maxResults', ], 'nextToken' => [ 'shape' => 'ListOrganizationRecommendationsRequestNextTokenString', 'location' => 'querystring', 'locationName' => 'nextToken', ], 'pillar' => [ 'shape' => 'RecommendationPillar', 'location' => 'querystring', 'locationName' => 'pillar', ], 'source' => [ 'shape' => 'RecommendationSource', 'location' => 'querystring', 'locationName' => 'source', ], 'status' => [ 'shape' => 'RecommendationStatus', 'location' => 'querystring', 'locationName' => 'status', ], 'type' => [ 'shape' => 'RecommendationType', 'location' => 'querystring', 'locationName' => 'type', ], ], ], 'ListOrganizationRecommendationsRequestMaxResultsInteger' => [ 'type' => 'integer', 'box' => true, 'max' => 200, 'min' => 1, ], 'ListOrganizationRecommendationsRequestNextTokenString' => [ 'type' => 'string', 'max' => 10000, 'min' => 4, ], 'ListOrganizationRecommendationsResponse' => [ 'type' => 'structure', 'required' => [ 'organizationRecommendationSummaries', ], 'members' => [ 'nextToken' => [ 'shape' => 'ListOrganizationRecommendationsResponseNextTokenString', ], 'organizationRecommendationSummaries' => [ 'shape' => 'OrganizationRecommendationSummaryList', ], ], ], 'ListOrganizationRecommendationsResponseNextTokenString' => [ 'type' => 'string', 'max' => 10000, 'min' => 4, ], 'ListRecommendationResourcesRequest' => [ 'type' => 'structure', 'required' => [ 'recommendationIdentifier', ], 'members' => [ 'exclusionStatus' => [ 'shape' => 'ExclusionStatus', 'location' => 'querystring', 'locationName' => 'exclusionStatus', ], 'maxResults' => [ 'shape' => 'ListRecommendationResourcesRequestMaxResultsInteger', 'location' => 'querystring', 'locationName' => 'maxResults', ], 'nextToken' => [ 'shape' => 'ListRecommendationResourcesRequestNextTokenString', 'location' => 'querystring', 'locationName' => 'nextToken', ], 'recommendationIdentifier' => [ 'shape' => 'AccountRecommendationIdentifier', 'location' => 'uri', 'locationName' => 'recommendationIdentifier', ], 'regionCode' => [ 'shape' => 'String', 'location' => 'querystring', 'locationName' => 'regionCode', ], 'status' => [ 'shape' => 'ResourceStatus', 'location' => 'querystring', 'locationName' => 'status', ], ], ], 'ListRecommendationResourcesRequestMaxResultsInteger' => [ 'type' => 'integer', 'box' => true, 'max' => 200, 'min' => 1, ], 'ListRecommendationResourcesRequestNextTokenString' => [ 'type' => 'string', 'max' => 10000, 'min' => 4, ], 'ListRecommendationResourcesResponse' => [ 'type' => 'structure', 'required' => [ 'recommendationResourceSummaries', ], 'members' => [ 'nextToken' => [ 'shape' => 'ListRecommendationResourcesResponseNextTokenString', ], 'recommendationResourceSummaries' => [ 'shape' => 'RecommendationResourceSummaryList', ], ], ], 'ListRecommendationResourcesResponseNextTokenString' => [ 'type' => 'string', 'max' => 10000, 'min' => 4, ], 'ListRecommendationsRequest' => [ 'type' => 'structure', 'members' => [ 'afterLastUpdatedAt' => [ 'shape' => 'Timestamp', 'location' => 'querystring', 'locationName' => 'afterLastUpdatedAt', ], 'awsService' => [ 'shape' => 'RecommendationAwsService', 'location' => 'querystring', 'locationName' => 'awsService', ], 'beforeLastUpdatedAt' => [ 'shape' => 'Timestamp', 'location' => 'querystring', 'locationName' => 'beforeLastUpdatedAt', ], 'checkIdentifier' => [ 'shape' => 'CheckIdentifier', 'location' => 'querystring', 'locationName' => 'checkIdentifier', ], 'maxResults' => [ 'shape' => 'ListRecommendationsRequestMaxResultsInteger', 'location' => 'querystring', 'locationName' => 'maxResults', ], 'nextToken' => [ 'shape' => 'ListRecommendationsRequestNextTokenString', 'location' => 'querystring', 'locationName' => 'nextToken', ], 'pillar' => [ 'shape' => 'RecommendationPillar', 'location' => 'querystring', 'locationName' => 'pillar', ], 'source' => [ 'shape' => 'RecommendationSource', 'location' => 'querystring', 'locationName' => 'source', ], 'status' => [ 'shape' => 'RecommendationStatus', 'location' => 'querystring', 'locationName' => 'status', ], 'type' => [ 'shape' => 'RecommendationType', 'location' => 'querystring', 'locationName' => 'type', ], ], ], 'ListRecommendationsRequestMaxResultsInteger' => [ 'type' => 'integer', 'box' => true, 'max' => 200, 'min' => 1, ], 'ListRecommendationsRequestNextTokenString' => [ 'type' => 'string', 'max' => 10000, 'min' => 4, ], 'ListRecommendationsResponse' => [ 'type' => 'structure', 'required' => [ 'recommendationSummaries', ], 'members' => [ 'nextToken' => [ 'shape' => 'ListRecommendationsResponseNextTokenString', ], 'recommendationSummaries' => [ 'shape' => 'RecommendationSummaryList', ], ], ], 'ListRecommendationsResponseNextTokenString' => [ 'type' => 'string', 'max' => 10000, 'min' => 4, ], 'Long' => [ 'type' => 'long', 'box' => true, ], 'OrganizationRecommendation' => [ 'type' => 'structure', 'required' => [ 'arn', 'description', 'id', 'name', 'pillars', 'resourcesAggregates', 'source', 'status', 'type', ], 'members' => [ 'arn' => [ 'shape' => 'OrganizationRecommendationArn', ], 'awsServices' => [ 'shape' => 'RecommendationAwsServiceList', ], 'checkArn' => [ 'shape' => 'String', ], 'createdAt' => [ 'shape' => 'SyntheticTimestamp_date_time', ], 'createdBy' => [ 'shape' => 'String', ], 'description' => [ 'shape' => 'String', ], 'id' => [ 'shape' => 'String', ], 'lastUpdatedAt' => [ 'shape' => 'SyntheticTimestamp_date_time', ], 'lifecycleStage' => [ 'shape' => 'RecommendationLifecycleStage', ], 'name' => [ 'shape' => 'String', ], 'pillarSpecificAggregates' => [ 'shape' => 'RecommendationPillarSpecificAggregates', ], 'pillars' => [ 'shape' => 'RecommendationPillarList', ], 'resolvedAt' => [ 'shape' => 'SyntheticTimestamp_date_time', ], 'resourcesAggregates' => [ 'shape' => 'RecommendationResourcesAggregates', ], 'source' => [ 'shape' => 'RecommendationSource', ], 'status' => [ 'shape' => 'RecommendationStatus', ], 'type' => [ 'shape' => 'RecommendationType', ], 'updateReason' => [ 'shape' => 'RecommendationUpdateReason', ], 'updateReasonCode' => [ 'shape' => 'UpdateRecommendationLifecycleStageReasonCode', ], 'updatedOnBehalfOf' => [ 'shape' => 'String', ], 'updatedOnBehalfOfJobTitle' => [ 'shape' => 'String', ], ], ], 'OrganizationRecommendationArn' => [ 'type' => 'string', 'max' => 2048, 'min' => 20, 'pattern' => '^arn:[\\w-]+:trustedadvisor:::organization-recommendation\\/[\\w-]+$', ], 'OrganizationRecommendationIdentifier' => [ 'type' => 'string', 'max' => 200, 'min' => 20, 'pattern' => '^arn:[\\w-]+:trustedadvisor:::organization-recommendation\\/[\\w-]+$', ], 'OrganizationRecommendationResourceSummary' => [ 'type' => 'structure', 'required' => [ 'arn', 'awsResourceId', 'id', 'lastUpdatedAt', 'metadata', 'recommendationArn', 'regionCode', 'status', ], 'members' => [ 'accountId' => [ 'shape' => 'AccountId', ], 'arn' => [ 'shape' => 'RecommendationResourceArn', ], 'awsResourceId' => [ 'shape' => 'String', ], 'exclusionStatus' => [ 'shape' => 'ExclusionStatus', ], 'id' => [ 'shape' => 'String', ], 'lastUpdatedAt' => [ 'shape' => 'SyntheticTimestamp_date_time', ], 'metadata' => [ 'shape' => 'StringMap', ], 'recommendationArn' => [ 'shape' => 'OrganizationRecommendationArn', ], 'regionCode' => [ 'shape' => 'RecommendationRegionCode', ], 'status' => [ 'shape' => 'ResourceStatus', ], ], ], 'OrganizationRecommendationResourceSummaryList' => [ 'type' => 'list', 'member' => [ 'shape' => 'OrganizationRecommendationResourceSummary', ], ], 'OrganizationRecommendationSummary' => [ 'type' => 'structure', 'required' => [ 'arn', 'id', 'name', 'pillars', 'resourcesAggregates', 'source', 'status', 'type', ], 'members' => [ 'arn' => [ 'shape' => 'OrganizationRecommendationArn', ], 'awsServices' => [ 'shape' => 'RecommendationAwsServiceList', ], 'checkArn' => [ 'shape' => 'String', ], 'createdAt' => [ 'shape' => 'SyntheticTimestamp_date_time', ], 'id' => [ 'shape' => 'String', ], 'lastUpdatedAt' => [ 'shape' => 'SyntheticTimestamp_date_time', ], 'lifecycleStage' => [ 'shape' => 'RecommendationLifecycleStage', ], 'name' => [ 'shape' => 'String', ], 'pillarSpecificAggregates' => [ 'shape' => 'RecommendationPillarSpecificAggregates', ], 'pillars' => [ 'shape' => 'RecommendationPillarList', ], 'resourcesAggregates' => [ 'shape' => 'RecommendationResourcesAggregates', ], 'source' => [ 'shape' => 'RecommendationSource', ], 'status' => [ 'shape' => 'RecommendationStatus', ], 'type' => [ 'shape' => 'RecommendationType', ], ], ], 'OrganizationRecommendationSummaryList' => [ 'type' => 'list', 'member' => [ 'shape' => 'OrganizationRecommendationSummary', ], ], 'Recommendation' => [ 'type' => 'structure', 'required' => [ 'arn', 'description', 'id', 'name', 'pillars', 'resourcesAggregates', 'source', 'status', 'type', ], 'members' => [ 'arn' => [ 'shape' => 'AccountRecommendationArn', ], 'awsServices' => [ 'shape' => 'RecommendationAwsServiceList', ], 'checkArn' => [ 'shape' => 'String', ], 'createdAt' => [ 'shape' => 'SyntheticTimestamp_date_time', ], 'createdBy' => [ 'shape' => 'String', ], 'description' => [ 'shape' => 'String', ], 'id' => [ 'shape' => 'String', ], 'lastUpdatedAt' => [ 'shape' => 'SyntheticTimestamp_date_time', ], 'lifecycleStage' => [ 'shape' => 'RecommendationLifecycleStage', ], 'name' => [ 'shape' => 'String', ], 'pillarSpecificAggregates' => [ 'shape' => 'RecommendationPillarSpecificAggregates', ], 'pillars' => [ 'shape' => 'RecommendationPillarList', ], 'resolvedAt' => [ 'shape' => 'SyntheticTimestamp_date_time', ], 'resourcesAggregates' => [ 'shape' => 'RecommendationResourcesAggregates', ], 'source' => [ 'shape' => 'RecommendationSource', ], 'status' => [ 'shape' => 'RecommendationStatus', ], 'type' => [ 'shape' => 'RecommendationType', ], 'updateReason' => [ 'shape' => 'RecommendationUpdateReason', ], 'updateReasonCode' => [ 'shape' => 'UpdateRecommendationLifecycleStageReasonCode', ], 'updatedOnBehalfOf' => [ 'shape' => 'String', ], 'updatedOnBehalfOfJobTitle' => [ 'shape' => 'String', ], ], ], 'RecommendationAwsService' => [ 'type' => 'string', 'max' => 30, 'min' => 2, ], 'RecommendationAwsServiceList' => [ 'type' => 'list', 'member' => [ 'shape' => 'RecommendationAwsService', ], ], 'RecommendationCostOptimizingAggregates' => [ 'type' => 'structure', 'required' => [ 'estimatedMonthlySavings', 'estimatedPercentMonthlySavings', ], 'members' => [ 'estimatedMonthlySavings' => [ 'shape' => 'Double', ], 'estimatedPercentMonthlySavings' => [ 'shape' => 'Double', ], ], ], 'RecommendationLanguage' => [ 'type' => 'string', 'enum' => [ 'en', 'ja', 'zh', 'fr', 'de', 'ko', 'zh_TW', 'it', 'es', 'pt_BR', 'id', ], ], 'RecommendationLifecycleStage' => [ 'type' => 'string', 'enum' => [ 'in_progress', 'pending_response', 'dismissed', 'resolved', ], ], 'RecommendationPillar' => [ 'type' => 'string', 'enum' => [ 'cost_optimizing', 'performance', 'security', 'service_limits', 'fault_tolerance', 'operational_excellence', ], ], 'RecommendationPillarList' => [ 'type' => 'list', 'member' => [ 'shape' => 'RecommendationPillar', ], ], 'RecommendationPillarSpecificAggregates' => [ 'type' => 'structure', 'members' => [ 'costOptimizing' => [ 'shape' => 'RecommendationCostOptimizingAggregates', ], ], ], 'RecommendationRegionCode' => [ 'type' => 'string', 'max' => 20, 'min' => 9, ], 'RecommendationResourceArn' => [ 'type' => 'string', 'max' => 2048, 'min' => 20, 'pattern' => '^arn:[\\w-]+:trustedadvisor::\\d{12}:recommendation-resource\\/[\\w-]+\\/[\\w-]+$', ], 'RecommendationResourceExclusion' => [ 'type' => 'structure', 'required' => [ 'arn', 'isExcluded', ], 'members' => [ 'arn' => [ 'shape' => 'RecommendationResourceArn', ], 'isExcluded' => [ 'shape' => 'Boolean', ], ], ], 'RecommendationResourceExclusionList' => [ 'type' => 'list', 'member' => [ 'shape' => 'RecommendationResourceExclusion', ], 'max' => 100, 'min' => 1, ], 'RecommendationResourceSummary' => [ 'type' => 'structure', 'required' => [ 'arn', 'awsResourceId', 'id', 'lastUpdatedAt', 'metadata', 'recommendationArn', 'regionCode', 'status', ], 'members' => [ 'arn' => [ 'shape' => 'RecommendationResourceArn', ], 'awsResourceId' => [ 'shape' => 'String', ], 'exclusionStatus' => [ 'shape' => 'ExclusionStatus', ], 'id' => [ 'shape' => 'String', ], 'lastUpdatedAt' => [ 'shape' => 'SyntheticTimestamp_date_time', ], 'metadata' => [ 'shape' => 'StringMap', ], 'recommendationArn' => [ 'shape' => 'AccountRecommendationArn', ], 'regionCode' => [ 'shape' => 'RecommendationRegionCode', ], 'status' => [ 'shape' => 'ResourceStatus', ], ], ], 'RecommendationResourceSummaryList' => [ 'type' => 'list', 'member' => [ 'shape' => 'RecommendationResourceSummary', ], ], 'RecommendationResourcesAggregates' => [ 'type' => 'structure', 'required' => [ 'errorCount', 'okCount', 'warningCount', ], 'members' => [ 'errorCount' => [ 'shape' => 'Long', ], 'okCount' => [ 'shape' => 'Long', ], 'warningCount' => [ 'shape' => 'Long', ], ], ], 'RecommendationSource' => [ 'type' => 'string', 'enum' => [ 'aws_config', 'compute_optimizer', 'cost_explorer', 'lse', 'manual', 'pse', 'rds', 'resilience', 'resilience_hub', 'security_hub', 'stir', 'ta_check', 'well_architected', ], ], 'RecommendationStatus' => [ 'type' => 'string', 'enum' => [ 'ok', 'warning', 'error', ], ], 'RecommendationSummary' => [ 'type' => 'structure', 'required' => [ 'arn', 'id', 'name', 'pillars', 'resourcesAggregates', 'source', 'status', 'type', ], 'members' => [ 'arn' => [ 'shape' => 'AccountRecommendationArn', ], 'awsServices' => [ 'shape' => 'RecommendationAwsServiceList', ], 'checkArn' => [ 'shape' => 'String', ], 'createdAt' => [ 'shape' => 'SyntheticTimestamp_date_time', ], 'id' => [ 'shape' => 'String', ], 'lastUpdatedAt' => [ 'shape' => 'SyntheticTimestamp_date_time', ], 'lifecycleStage' => [ 'shape' => 'RecommendationLifecycleStage', ], 'name' => [ 'shape' => 'String', ], 'pillarSpecificAggregates' => [ 'shape' => 'RecommendationPillarSpecificAggregates', ], 'pillars' => [ 'shape' => 'RecommendationPillarList', ], 'resourcesAggregates' => [ 'shape' => 'RecommendationResourcesAggregates', ], 'source' => [ 'shape' => 'RecommendationSource', ], 'status' => [ 'shape' => 'RecommendationStatus', ], 'type' => [ 'shape' => 'RecommendationType', ], ], ], 'RecommendationSummaryList' => [ 'type' => 'list', 'member' => [ 'shape' => 'RecommendationSummary', ], ], 'RecommendationType' => [ 'type' => 'string', 'enum' => [ 'standard', 'priority', ], ], 'RecommendationUpdateReason' => [ 'type' => 'string', 'max' => 4096, 'min' => 10, 'pattern' => '^[\\s\\S]*$', 'sensitive' => true, ], 'ResourceNotFoundException' => [ 'type' => 'structure', 'required' => [ 'message', ], 'members' => [ 'message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 404, 'senderFault' => true, ], 'exception' => true, ], 'ResourceStatus' => [ 'type' => 'string', 'enum' => [ 'ok', 'warning', 'error', ], ], 'String' => [ 'type' => 'string', ], 'StringMap' => [ 'type' => 'map', 'key' => [ 'shape' => 'String', ], 'value' => [ 'shape' => 'String', ], ], 'SyntheticTimestamp_date_time' => [ 'type' => 'timestamp', 'timestampFormat' => 'iso8601', ], 'ThrottlingException' => [ 'type' => 'structure', 'required' => [ 'message', ], 'members' => [ 'message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 429, 'senderFault' => true, ], 'exception' => true, 'retryable' => [ 'throttling' => true, ], ], 'Timestamp' => [ 'type' => 'timestamp', ], 'UpdateOrganizationRecommendationLifecycleRequest' => [ 'type' => 'structure', 'required' => [ 'lifecycleStage', 'organizationRecommendationIdentifier', ], 'members' => [ 'lifecycleStage' => [ 'shape' => 'UpdateRecommendationLifecycleStage', ], 'organizationRecommendationIdentifier' => [ 'shape' => 'OrganizationRecommendationIdentifier', 'location' => 'uri', 'locationName' => 'organizationRecommendationIdentifier', ], 'updateReason' => [ 'shape' => 'RecommendationUpdateReason', ], 'updateReasonCode' => [ 'shape' => 'UpdateRecommendationLifecycleStageReasonCode', ], ], ], 'UpdateRecommendationLifecycleRequest' => [ 'type' => 'structure', 'required' => [ 'lifecycleStage', 'recommendationIdentifier', ], 'members' => [ 'lifecycleStage' => [ 'shape' => 'UpdateRecommendationLifecycleStage', ], 'recommendationIdentifier' => [ 'shape' => 'AccountRecommendationIdentifier', 'location' => 'uri', 'locationName' => 'recommendationIdentifier', ], 'updateReason' => [ 'shape' => 'RecommendationUpdateReason', ], 'updateReasonCode' => [ 'shape' => 'UpdateRecommendationLifecycleStageReasonCode', ], ], ], 'UpdateRecommendationLifecycleStage' => [ 'type' => 'string', 'enum' => [ 'pending_response', 'in_progress', 'dismissed', 'resolved', ], ], 'UpdateRecommendationLifecycleStageReasonCode' => [ 'type' => 'string', 'enum' => [ 'non_critical_account', 'temporary_account', 'valid_business_case', 'other_methods_available', 'low_priority', 'not_applicable', 'other', ], ], 'UpdateRecommendationResourceExclusionError' => [ 'type' => 'structure', 'members' => [ 'arn' => [ 'shape' => 'RecommendationResourceArn', ], 'errorCode' => [ 'shape' => 'String', ], 'errorMessage' => [ 'shape' => 'String', ], ], ], 'UpdateRecommendationResourceExclusionErrorList' => [ 'type' => 'list', 'member' => [ 'shape' => 'UpdateRecommendationResourceExclusionError', ], ], 'ValidationException' => [ 'type' => 'structure', 'required' => [ 'message', ], 'members' => [ 'message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], ],];
