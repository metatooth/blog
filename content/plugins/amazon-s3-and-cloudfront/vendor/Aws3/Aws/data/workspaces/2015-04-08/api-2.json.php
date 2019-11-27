<?php

// This file was auto-generated from sdk-root/src/data/workspaces/2015-04-08/api-2.json
return ['version' => '2.0', 'metadata' => ['apiVersion' => '2015-04-08', 'endpointPrefix' => 'workspaces', 'jsonVersion' => '1.1', 'protocol' => 'json', 'serviceFullName' => 'Amazon WorkSpaces', 'serviceId' => 'WorkSpaces', 'signatureVersion' => 'v4', 'targetPrefix' => 'WorkspacesService', 'uid' => 'workspaces-2015-04-08'], 'operations' => ['AssociateIpGroups' => ['name' => 'AssociateIpGroups', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'AssociateIpGroupsRequest'], 'output' => ['shape' => 'AssociateIpGroupsResult'], 'errors' => [['shape' => 'InvalidParameterValuesException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'ResourceLimitExceededException'], ['shape' => 'InvalidResourceStateException'], ['shape' => 'AccessDeniedException'], ['shape' => 'OperationNotSupportedException']]], 'AuthorizeIpRules' => ['name' => 'AuthorizeIpRules', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'AuthorizeIpRulesRequest'], 'output' => ['shape' => 'AuthorizeIpRulesResult'], 'errors' => [['shape' => 'InvalidParameterValuesException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'ResourceLimitExceededException'], ['shape' => 'InvalidResourceStateException'], ['shape' => 'AccessDeniedException']]], 'CreateIpGroup' => ['name' => 'CreateIpGroup', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'CreateIpGroupRequest'], 'output' => ['shape' => 'CreateIpGroupResult'], 'errors' => [['shape' => 'InvalidParameterValuesException'], ['shape' => 'ResourceLimitExceededException'], ['shape' => 'ResourceAlreadyExistsException'], ['shape' => 'ResourceCreationFailedException'], ['shape' => 'AccessDeniedException']]], 'CreateTags' => ['name' => 'CreateTags', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'CreateTagsRequest'], 'output' => ['shape' => 'CreateTagsResult'], 'errors' => [['shape' => 'ResourceNotFoundException'], ['shape' => 'InvalidParameterValuesException'], ['shape' => 'ResourceLimitExceededException']]], 'CreateWorkspaces' => ['name' => 'CreateWorkspaces', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'CreateWorkspacesRequest'], 'output' => ['shape' => 'CreateWorkspacesResult'], 'errors' => [['shape' => 'ResourceLimitExceededException'], ['shape' => 'InvalidParameterValuesException']]], 'DeleteIpGroup' => ['name' => 'DeleteIpGroup', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'DeleteIpGroupRequest'], 'output' => ['shape' => 'DeleteIpGroupResult'], 'errors' => [['shape' => 'InvalidParameterValuesException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'ResourceAssociatedException'], ['shape' => 'AccessDeniedException']]], 'DeleteTags' => ['name' => 'DeleteTags', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'DeleteTagsRequest'], 'output' => ['shape' => 'DeleteTagsResult'], 'errors' => [['shape' => 'ResourceNotFoundException'], ['shape' => 'InvalidParameterValuesException']]], 'DeleteWorkspaceImage' => ['name' => 'DeleteWorkspaceImage', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'DeleteWorkspaceImageRequest'], 'output' => ['shape' => 'DeleteWorkspaceImageResult'], 'errors' => [['shape' => 'ResourceAssociatedException'], ['shape' => 'InvalidResourceStateException'], ['shape' => 'AccessDeniedException']]], 'DescribeAccount' => ['name' => 'DescribeAccount', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'DescribeAccountRequest'], 'output' => ['shape' => 'DescribeAccountResult'], 'errors' => [['shape' => 'AccessDeniedException']]], 'DescribeAccountModifications' => ['name' => 'DescribeAccountModifications', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'DescribeAccountModificationsRequest'], 'output' => ['shape' => 'DescribeAccountModificationsResult'], 'errors' => [['shape' => 'AccessDeniedException']]], 'DescribeClientProperties' => ['name' => 'DescribeClientProperties', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'DescribeClientPropertiesRequest'], 'output' => ['shape' => 'DescribeClientPropertiesResult'], 'errors' => [['shape' => 'InvalidParameterValuesException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'AccessDeniedException']]], 'DescribeIpGroups' => ['name' => 'DescribeIpGroups', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'DescribeIpGroupsRequest'], 'output' => ['shape' => 'DescribeIpGroupsResult'], 'errors' => [['shape' => 'InvalidParameterValuesException'], ['shape' => 'AccessDeniedException']]], 'DescribeTags' => ['name' => 'DescribeTags', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'DescribeTagsRequest'], 'output' => ['shape' => 'DescribeTagsResult'], 'errors' => [['shape' => 'ResourceNotFoundException']]], 'DescribeWorkspaceBundles' => ['name' => 'DescribeWorkspaceBundles', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'DescribeWorkspaceBundlesRequest'], 'output' => ['shape' => 'DescribeWorkspaceBundlesResult'], 'errors' => [['shape' => 'InvalidParameterValuesException']]], 'DescribeWorkspaceDirectories' => ['name' => 'DescribeWorkspaceDirectories', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'DescribeWorkspaceDirectoriesRequest'], 'output' => ['shape' => 'DescribeWorkspaceDirectoriesResult'], 'errors' => [['shape' => 'InvalidParameterValuesException']]], 'DescribeWorkspaceImages' => ['name' => 'DescribeWorkspaceImages', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'DescribeWorkspaceImagesRequest'], 'output' => ['shape' => 'DescribeWorkspaceImagesResult'], 'errors' => [['shape' => 'AccessDeniedException']]], 'DescribeWorkspaces' => ['name' => 'DescribeWorkspaces', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'DescribeWorkspacesRequest'], 'output' => ['shape' => 'DescribeWorkspacesResult'], 'errors' => [['shape' => 'InvalidParameterValuesException'], ['shape' => 'ResourceUnavailableException']]], 'DescribeWorkspacesConnectionStatus' => ['name' => 'DescribeWorkspacesConnectionStatus', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'DescribeWorkspacesConnectionStatusRequest'], 'output' => ['shape' => 'DescribeWorkspacesConnectionStatusResult'], 'errors' => [['shape' => 'InvalidParameterValuesException']]], 'DisassociateIpGroups' => ['name' => 'DisassociateIpGroups', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'DisassociateIpGroupsRequest'], 'output' => ['shape' => 'DisassociateIpGroupsResult'], 'errors' => [['shape' => 'InvalidParameterValuesException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'InvalidResourceStateException'], ['shape' => 'AccessDeniedException']]], 'ImportWorkspaceImage' => ['name' => 'ImportWorkspaceImage', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'ImportWorkspaceImageRequest'], 'output' => ['shape' => 'ImportWorkspaceImageResult'], 'errors' => [['shape' => 'ResourceLimitExceededException'], ['shape' => 'ResourceAlreadyExistsException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'OperationNotSupportedException'], ['shape' => 'AccessDeniedException']]], 'ListAvailableManagementCidrRanges' => ['name' => 'ListAvailableManagementCidrRanges', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'ListAvailableManagementCidrRangesRequest'], 'output' => ['shape' => 'ListAvailableManagementCidrRangesResult'], 'errors' => [['shape' => 'InvalidParameterValuesException'], ['shape' => 'AccessDeniedException']]], 'ModifyAccount' => ['name' => 'ModifyAccount', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'ModifyAccountRequest'], 'output' => ['shape' => 'ModifyAccountResult'], 'errors' => [['shape' => 'InvalidParameterValuesException'], ['shape' => 'AccessDeniedException'], ['shape' => 'InvalidResourceStateException'], ['shape' => 'ResourceUnavailableException'], ['shape' => 'ResourceNotFoundException']]], 'ModifyClientProperties' => ['name' => 'ModifyClientProperties', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'ModifyClientPropertiesRequest'], 'output' => ['shape' => 'ModifyClientPropertiesResult'], 'errors' => [['shape' => 'InvalidParameterValuesException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'AccessDeniedException']]], 'ModifyWorkspaceProperties' => ['name' => 'ModifyWorkspaceProperties', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'ModifyWorkspacePropertiesRequest'], 'output' => ['shape' => 'ModifyWorkspacePropertiesResult'], 'errors' => [['shape' => 'InvalidParameterValuesException'], ['shape' => 'InvalidResourceStateException'], ['shape' => 'OperationInProgressException'], ['shape' => 'UnsupportedWorkspaceConfigurationException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'AccessDeniedException'], ['shape' => 'ResourceUnavailableException']]], 'ModifyWorkspaceState' => ['name' => 'ModifyWorkspaceState', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'ModifyWorkspaceStateRequest'], 'output' => ['shape' => 'ModifyWorkspaceStateResult'], 'errors' => [['shape' => 'InvalidParameterValuesException'], ['shape' => 'InvalidResourceStateException'], ['shape' => 'ResourceNotFoundException']]], 'RebootWorkspaces' => ['name' => 'RebootWorkspaces', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'RebootWorkspacesRequest'], 'output' => ['shape' => 'RebootWorkspacesResult']], 'RebuildWorkspaces' => ['name' => 'RebuildWorkspaces', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'RebuildWorkspacesRequest'], 'output' => ['shape' => 'RebuildWorkspacesResult']], 'RevokeIpRules' => ['name' => 'RevokeIpRules', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'RevokeIpRulesRequest'], 'output' => ['shape' => 'RevokeIpRulesResult'], 'errors' => [['shape' => 'InvalidParameterValuesException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'InvalidResourceStateException'], ['shape' => 'AccessDeniedException']]], 'StartWorkspaces' => ['name' => 'StartWorkspaces', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'StartWorkspacesRequest'], 'output' => ['shape' => 'StartWorkspacesResult']], 'StopWorkspaces' => ['name' => 'StopWorkspaces', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'StopWorkspacesRequest'], 'output' => ['shape' => 'StopWorkspacesResult']], 'TerminateWorkspaces' => ['name' => 'TerminateWorkspaces', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'TerminateWorkspacesRequest'], 'output' => ['shape' => 'TerminateWorkspacesResult']], 'UpdateRulesOfIpGroup' => ['name' => 'UpdateRulesOfIpGroup', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'UpdateRulesOfIpGroupRequest'], 'output' => ['shape' => 'UpdateRulesOfIpGroupResult'], 'errors' => [['shape' => 'InvalidParameterValuesException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'ResourceLimitExceededException'], ['shape' => 'InvalidResourceStateException'], ['shape' => 'AccessDeniedException']]]], 'shapes' => ['ARN' => ['type' => 'string', 'pattern' => '^arn:aws:[A-Za-z0-9][A-za-z0-9_/.-]{0,62}:[A-za-z0-9_/.-]{0,63}:[A-za-z0-9_/.-]{0,63}:[A-Za-z0-9][A-za-z0-9_/.-]{0,127}$'], 'AccessDeniedException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'ExceptionMessage']], 'exception' => \true], 'AccountModification' => ['type' => 'structure', 'members' => ['ModificationState' => ['shape' => 'DedicatedTenancyModificationStateEnum'], 'DedicatedTenancySupport' => ['shape' => 'DedicatedTenancySupportResultEnum'], 'DedicatedTenancyManagementCidrRange' => ['shape' => 'DedicatedTenancyManagementCidrRange'], 'StartTime' => ['shape' => 'Timestamp'], 'ErrorCode' => ['shape' => 'WorkspaceErrorCode'], 'ErrorMessage' => ['shape' => 'Description']]], 'AccountModificationList' => ['type' => 'list', 'member' => ['shape' => 'AccountModification']], 'Alias' => ['type' => 'string'], 'AssociateIpGroupsRequest' => ['type' => 'structure', 'required' => ['DirectoryId', 'GroupIds'], 'members' => ['DirectoryId' => ['shape' => 'DirectoryId'], 'GroupIds' => ['shape' => 'IpGroupIdList']]], 'AssociateIpGroupsResult' => ['type' => 'structure', 'members' => []], 'AuthorizeIpRulesRequest' => ['type' => 'structure', 'required' => ['GroupId', 'UserRules'], 'members' => ['GroupId' => ['shape' => 'IpGroupId'], 'UserRules' => ['shape' => 'IpRuleList']]], 'AuthorizeIpRulesResult' => ['type' => 'structure', 'members' => []], 'BooleanObject' => ['type' => 'boolean'], 'BundleId' => ['type' => 'string', 'pattern' => '^wsb-[0-9a-z]{8,63}$'], 'BundleIdList' => ['type' => 'list', 'member' => ['shape' => 'BundleId'], 'max' => 25, 'min' => 1], 'BundleList' => ['type' => 'list', 'member' => ['shape' => 'WorkspaceBundle']], 'BundleOwner' => ['type' => 'string'], 'ClientProperties' => ['type' => 'structure', 'members' => ['ReconnectEnabled' => ['shape' => 'ReconnectEnum']]], 'ClientPropertiesList' => ['type' => 'list', 'member' => ['shape' => 'ClientPropertiesResult']], 'ClientPropertiesResult' => ['type' => 'structure', 'members' => ['ResourceId' => ['shape' => 'NonEmptyString'], 'ClientProperties' => ['shape' => 'ClientProperties']]], 'Compute' => ['type' => 'string', 'enum' => ['VALUE', 'STANDARD', 'PERFORMANCE', 'POWER', 'GRAPHICS', 'POWERPRO', 'GRAPHICSPRO']], 'ComputeType' => ['type' => 'structure', 'members' => ['Name' => ['shape' => 'Compute']]], 'ComputerName' => ['type' => 'string'], 'ConnectionState' => ['type' => 'string', 'enum' => ['CONNECTED', 'DISCONNECTED', 'UNKNOWN']], 'CreateIpGroupRequest' => ['type' => 'structure', 'required' => ['GroupName'], 'members' => ['GroupName' => ['shape' => 'IpGroupName'], 'GroupDesc' => ['shape' => 'IpGroupDesc'], 'UserRules' => ['shape' => 'IpRuleList']]], 'CreateIpGroupResult' => ['type' => 'structure', 'members' => ['GroupId' => ['shape' => 'IpGroupId']]], 'CreateTagsRequest' => ['type' => 'structure', 'required' => ['ResourceId', 'Tags'], 'members' => ['ResourceId' => ['shape' => 'NonEmptyString'], 'Tags' => ['shape' => 'TagList']]], 'CreateTagsResult' => ['type' => 'structure', 'members' => []], 'CreateWorkspacesRequest' => ['type' => 'structure', 'required' => ['Workspaces'], 'members' => ['Workspaces' => ['shape' => 'WorkspaceRequestList']]], 'CreateWorkspacesResult' => ['type' => 'structure', 'members' => ['FailedRequests' => ['shape' => 'FailedCreateWorkspaceRequests'], 'PendingRequests' => ['shape' => 'WorkspaceList']]], 'DedicatedTenancyCidrRangeList' => ['type' => 'list', 'member' => ['shape' => 'DedicatedTenancyManagementCidrRange']], 'DedicatedTenancyManagementCidrRange' => ['type' => 'string', 'pattern' => '(^([0-9]|[1-9][0-9]|1[0-9][0-9]|2[0-4][0-9]|25[0-5])\\.([0-9]|[1-9][0-9]|1[0-9][0-9]|2[0-4][0-9]|25[0-5])\\.0\\.0)(\\/(16$))$'], 'DedicatedTenancyModificationStateEnum' => ['type' => 'string', 'enum' => ['PENDING', 'COMPLETED', 'FAILED']], 'DedicatedTenancySupportEnum' => ['type' => 'string', 'enum' => ['ENABLED']], 'DedicatedTenancySupportResultEnum' => ['type' => 'string', 'enum' => ['ENABLED', 'DISABLED']], 'DefaultOu' => ['type' => 'string'], 'DefaultWorkspaceCreationProperties' => ['type' => 'structure', 'members' => ['EnableWorkDocs' => ['shape' => 'BooleanObject'], 'EnableInternetAccess' => ['shape' => 'BooleanObject'], 'DefaultOu' => ['shape' => 'DefaultOu'], 'CustomSecurityGroupId' => ['shape' => 'SecurityGroupId'], 'UserEnabledAsLocalAdministrator' => ['shape' => 'BooleanObject']]], 'DeleteIpGroupRequest' => ['type' => 'structure', 'required' => ['GroupId'], 'members' => ['GroupId' => ['shape' => 'IpGroupId']]], 'DeleteIpGroupResult' => ['type' => 'structure', 'members' => []], 'DeleteTagsRequest' => ['type' => 'structure', 'required' => ['ResourceId', 'TagKeys'], 'members' => ['ResourceId' => ['shape' => 'NonEmptyString'], 'TagKeys' => ['shape' => 'TagKeyList']]], 'DeleteTagsResult' => ['type' => 'structure', 'members' => []], 'DeleteWorkspaceImageRequest' => ['type' => 'structure', 'required' => ['ImageId'], 'members' => ['ImageId' => ['shape' => 'WorkspaceImageId']]], 'DeleteWorkspaceImageResult' => ['type' => 'structure', 'members' => []], 'DescribeAccountModificationsRequest' => ['type' => 'structure', 'members' => ['NextToken' => ['shape' => 'PaginationToken']]], 'DescribeAccountModificationsResult' => ['type' => 'structure', 'members' => ['AccountModifications' => ['shape' => 'AccountModificationList'], 'NextToken' => ['shape' => 'PaginationToken']]], 'DescribeAccountRequest' => ['type' => 'structure', 'members' => []], 'DescribeAccountResult' => ['type' => 'structure', 'members' => ['DedicatedTenancySupport' => ['shape' => 'DedicatedTenancySupportResultEnum'], 'DedicatedTenancyManagementCidrRange' => ['shape' => 'DedicatedTenancyManagementCidrRange']]], 'DescribeClientPropertiesRequest' => ['type' => 'structure', 'required' => ['ResourceIds'], 'members' => ['ResourceIds' => ['shape' => 'ResourceIdList']]], 'DescribeClientPropertiesResult' => ['type' => 'structure', 'members' => ['ClientPropertiesList' => ['shape' => 'ClientPropertiesList']]], 'DescribeIpGroupsRequest' => ['type' => 'structure', 'members' => ['GroupIds' => ['shape' => 'IpGroupIdList'], 'NextToken' => ['shape' => 'PaginationToken'], 'MaxResults' => ['shape' => 'Limit']]], 'DescribeIpGroupsResult' => ['type' => 'structure', 'members' => ['Result' => ['shape' => 'WorkspacesIpGroupsList'], 'NextToken' => ['shape' => 'PaginationToken']]], 'DescribeTagsRequest' => ['type' => 'structure', 'required' => ['ResourceId'], 'members' => ['ResourceId' => ['shape' => 'NonEmptyString']]], 'DescribeTagsResult' => ['type' => 'structure', 'members' => ['TagList' => ['shape' => 'TagList']]], 'DescribeWorkspaceBundlesRequest' => ['type' => 'structure', 'members' => ['BundleIds' => ['shape' => 'BundleIdList'], 'Owner' => ['shape' => 'BundleOwner'], 'NextToken' => ['shape' => 'PaginationToken']]], 'DescribeWorkspaceBundlesResult' => ['type' => 'structure', 'members' => ['Bundles' => ['shape' => 'BundleList'], 'NextToken' => ['shape' => 'PaginationToken']]], 'DescribeWorkspaceDirectoriesRequest' => ['type' => 'structure', 'members' => ['DirectoryIds' => ['shape' => 'DirectoryIdList'], 'NextToken' => ['shape' => 'PaginationToken']]], 'DescribeWorkspaceDirectoriesResult' => ['type' => 'structure', 'members' => ['Directories' => ['shape' => 'DirectoryList'], 'NextToken' => ['shape' => 'PaginationToken']]], 'DescribeWorkspaceImagesRequest' => ['type' => 'structure', 'members' => ['ImageIds' => ['shape' => 'WorkspaceImageIdList'], 'NextToken' => ['shape' => 'PaginationToken'], 'MaxResults' => ['shape' => 'Limit']]], 'DescribeWorkspaceImagesResult' => ['type' => 'structure', 'members' => ['Images' => ['shape' => 'WorkspaceImageList'], 'NextToken' => ['shape' => 'PaginationToken']]], 'DescribeWorkspacesConnectionStatusRequest' => ['type' => 'structure', 'members' => ['WorkspaceIds' => ['shape' => 'WorkspaceIdList'], 'NextToken' => ['shape' => 'PaginationToken']]], 'DescribeWorkspacesConnectionStatusResult' => ['type' => 'structure', 'members' => ['WorkspacesConnectionStatus' => ['shape' => 'WorkspaceConnectionStatusList'], 'NextToken' => ['shape' => 'PaginationToken']]], 'DescribeWorkspacesRequest' => ['type' => 'structure', 'members' => ['WorkspaceIds' => ['shape' => 'WorkspaceIdList'], 'DirectoryId' => ['shape' => 'DirectoryId'], 'UserName' => ['shape' => 'UserName'], 'BundleId' => ['shape' => 'BundleId'], 'Limit' => ['shape' => 'Limit'], 'NextToken' => ['shape' => 'PaginationToken']]], 'DescribeWorkspacesResult' => ['type' => 'structure', 'members' => ['Workspaces' => ['shape' => 'WorkspaceList'], 'NextToken' => ['shape' => 'PaginationToken']]], 'Description' => ['type' => 'string'], 'DirectoryId' => ['type' => 'string', 'pattern' => '^d-[0-9a-f]{8,63}$'], 'DirectoryIdList' => ['type' => 'list', 'member' => ['shape' => 'DirectoryId'], 'max' => 25, 'min' => 1], 'DirectoryList' => ['type' => 'list', 'member' => ['shape' => 'WorkspaceDirectory']], 'DirectoryName' => ['type' => 'string'], 'DisassociateIpGroupsRequest' => ['type' => 'structure', 'required' => ['DirectoryId', 'GroupIds'], 'members' => ['DirectoryId' => ['shape' => 'DirectoryId'], 'GroupIds' => ['shape' => 'IpGroupIdList']]], 'DisassociateIpGroupsResult' => ['type' => 'structure', 'members' => []], 'DnsIpAddresses' => ['type' => 'list', 'member' => ['shape' => 'IpAddress']], 'Ec2ImageId' => ['type' => 'string', 'pattern' => '^ami\\-([a-f0-9]{8}|[a-f0-9]{17})$'], 'ErrorType' => ['type' => 'string'], 'ExceptionMessage' => ['type' => 'string'], 'FailedCreateWorkspaceRequest' => ['type' => 'structure', 'members' => ['WorkspaceRequest' => ['shape' => 'WorkspaceRequest'], 'ErrorCode' => ['shape' => 'ErrorType'], 'ErrorMessage' => ['shape' => 'Description']]], 'FailedCreateWorkspaceRequests' => ['type' => 'list', 'member' => ['shape' => 'FailedCreateWorkspaceRequest']], 'FailedRebootWorkspaceRequests' => ['type' => 'list', 'member' => ['shape' => 'FailedWorkspaceChangeRequest']], 'FailedRebuildWorkspaceRequests' => ['type' => 'list', 'member' => ['shape' => 'FailedWorkspaceChangeRequest']], 'FailedStartWorkspaceRequests' => ['type' => 'list', 'member' => ['shape' => 'FailedWorkspaceChangeRequest']], 'FailedStopWorkspaceRequests' => ['type' => 'list', 'member' => ['shape' => 'FailedWorkspaceChangeRequest']], 'FailedTerminateWorkspaceRequests' => ['type' => 'list', 'member' => ['shape' => 'FailedWorkspaceChangeRequest']], 'FailedWorkspaceChangeRequest' => ['type' => 'structure', 'members' => ['WorkspaceId' => ['shape' => 'WorkspaceId'], 'ErrorCode' => ['shape' => 'ErrorType'], 'ErrorMessage' => ['shape' => 'Description']]], 'ImportWorkspaceImageRequest' => ['type' => 'structure', 'required' => ['Ec2ImageId', 'IngestionProcess', 'ImageName', 'ImageDescription'], 'members' => ['Ec2ImageId' => ['shape' => 'Ec2ImageId'], 'IngestionProcess' => ['shape' => 'WorkspaceImageIngestionProcess'], 'ImageName' => ['shape' => 'WorkspaceImageName'], 'ImageDescription' => ['shape' => 'WorkspaceImageDescription']]], 'ImportWorkspaceImageResult' => ['type' => 'structure', 'members' => ['ImageId' => ['shape' => 'WorkspaceImageId']]], 'InvalidParameterValuesException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'ExceptionMessage']], 'exception' => \true], 'InvalidResourceStateException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'ExceptionMessage']], 'exception' => \true], 'IpAddress' => ['type' => 'string'], 'IpGroupDesc' => ['type' => 'string'], 'IpGroupId' => ['type' => 'string', 'pattern' => 'wsipg-[0-9a-z]{8,63}$'], 'IpGroupIdList' => ['type' => 'list', 'member' => ['shape' => 'IpGroupId']], 'IpGroupName' => ['type' => 'string'], 'IpRevokedRuleList' => ['type' => 'list', 'member' => ['shape' => 'IpRule']], 'IpRule' => ['type' => 'string'], 'IpRuleDesc' => ['type' => 'string'], 'IpRuleItem' => ['type' => 'structure', 'members' => ['ipRule' => ['shape' => 'IpRule'], 'ruleDesc' => ['shape' => 'IpRuleDesc']]], 'IpRuleList' => ['type' => 'list', 'member' => ['shape' => 'IpRuleItem']], 'Limit' => ['type' => 'integer', 'max' => 25, 'min' => 1], 'ListAvailableManagementCidrRangesRequest' => ['type' => 'structure', 'required' => ['ManagementCidrRangeConstraint'], 'members' => ['ManagementCidrRangeConstraint' => ['shape' => 'ManagementCidrRangeConstraint'], 'MaxResults' => ['shape' => 'ManagementCidrRangeMaxResults'], 'NextToken' => ['shape' => 'PaginationToken']]], 'ListAvailableManagementCidrRangesResult' => ['type' => 'structure', 'members' => ['ManagementCidrRanges' => ['shape' => 'DedicatedTenancyCidrRangeList'], 'NextToken' => ['shape' => 'PaginationToken']]], 'ManagementCidrRangeConstraint' => ['type' => 'string', 'pattern' => '^(([0-9]|[1-9][0-9]|1[0-9]{2}|2[0-4][0-9]|25[0-5])\\.){3}([0-9]|[1-9][0-9]|1[0-9]{2}|2[0-4][0-9]|25[0-5])(\\/(3[0-2]|[1-2][0-9]|[0-9]))$'], 'ManagementCidrRangeMaxResults' => ['type' => 'integer', 'max' => 5, 'min' => 1], 'ModificationResourceEnum' => ['type' => 'string', 'enum' => ['ROOT_VOLUME', 'USER_VOLUME', 'COMPUTE_TYPE']], 'ModificationState' => ['type' => 'structure', 'members' => ['Resource' => ['shape' => 'ModificationResourceEnum'], 'State' => ['shape' => 'ModificationStateEnum']]], 'ModificationStateEnum' => ['type' => 'string', 'enum' => ['UPDATE_INITIATED', 'UPDATE_IN_PROGRESS']], 'ModificationStateList' => ['type' => 'list', 'member' => ['shape' => 'ModificationState']], 'ModifyAccountRequest' => ['type' => 'structure', 'members' => ['DedicatedTenancySupport' => ['shape' => 'DedicatedTenancySupportEnum'], 'DedicatedTenancyManagementCidrRange' => ['shape' => 'DedicatedTenancyManagementCidrRange']]], 'ModifyAccountResult' => ['type' => 'structure', 'members' => []], 'ModifyClientPropertiesRequest' => ['type' => 'structure', 'required' => ['ResourceId'], 'members' => ['ResourceId' => ['shape' => 'NonEmptyString'], 'ClientProperties' => ['shape' => 'ClientProperties']]], 'ModifyClientPropertiesResult' => ['type' => 'structure', 'members' => []], 'ModifyWorkspacePropertiesRequest' => ['type' => 'structure', 'required' => ['WorkspaceId', 'WorkspaceProperties'], 'members' => ['WorkspaceId' => ['shape' => 'WorkspaceId'], 'WorkspaceProperties' => ['shape' => 'WorkspaceProperties']]], 'ModifyWorkspacePropertiesResult' => ['type' => 'structure', 'members' => []], 'ModifyWorkspaceStateRequest' => ['type' => 'structure', 'required' => ['WorkspaceId', 'WorkspaceState'], 'members' => ['WorkspaceId' => ['shape' => 'WorkspaceId'], 'WorkspaceState' => ['shape' => 'TargetWorkspaceState']]], 'ModifyWorkspaceStateResult' => ['type' => 'structure', 'members' => []], 'NonEmptyString' => ['type' => 'string', 'min' => 1], 'OperatingSystem' => ['type' => 'structure', 'members' => ['Type' => ['shape' => 'OperatingSystemType']]], 'OperatingSystemType' => ['type' => 'string', 'enum' => ['WINDOWS', 'LINUX']], 'OperationInProgressException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'ExceptionMessage']], 'exception' => \true], 'OperationNotSupportedException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'ExceptionMessage']], 'exception' => \true], 'PaginationToken' => ['type' => 'string', 'max' => 63, 'min' => 1], 'RebootRequest' => ['type' => 'structure', 'required' => ['WorkspaceId'], 'members' => ['WorkspaceId' => ['shape' => 'WorkspaceId']]], 'RebootWorkspaceRequests' => ['type' => 'list', 'member' => ['shape' => 'RebootRequest'], 'max' => 25, 'min' => 1], 'RebootWorkspacesRequest' => ['type' => 'structure', 'required' => ['RebootWorkspaceRequests'], 'members' => ['RebootWorkspaceRequests' => ['shape' => 'RebootWorkspaceRequests']]], 'RebootWorkspacesResult' => ['type' => 'structure', 'members' => ['FailedRequests' => ['shape' => 'FailedRebootWorkspaceRequests']]], 'RebuildRequest' => ['type' => 'structure', 'required' => ['WorkspaceId'], 'members' => ['WorkspaceId' => ['shape' => 'WorkspaceId']]], 'RebuildWorkspaceRequests' => ['type' => 'list', 'member' => ['shape' => 'RebuildRequest'], 'max' => 1, 'min' => 1], 'RebuildWorkspacesRequest' => ['type' => 'structure', 'required' => ['RebuildWorkspaceRequests'], 'members' => ['RebuildWorkspaceRequests' => ['shape' => 'RebuildWorkspaceRequests']]], 'RebuildWorkspacesResult' => ['type' => 'structure', 'members' => ['FailedRequests' => ['shape' => 'FailedRebuildWorkspaceRequests']]], 'ReconnectEnum' => ['type' => 'string', 'enum' => ['ENABLED', 'DISABLED']], 'RegistrationCode' => ['type' => 'string', 'max' => 20, 'min' => 1], 'ResourceAlreadyExistsException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'ExceptionMessage']], 'exception' => \true], 'ResourceAssociatedException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'ExceptionMessage']], 'exception' => \true], 'ResourceCreationFailedException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'ExceptionMessage']], 'exception' => \true], 'ResourceIdList' => ['type' => 'list', 'member' => ['shape' => 'NonEmptyString'], 'max' => 25, 'min' => 1], 'ResourceLimitExceededException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'ExceptionMessage']], 'exception' => \true], 'ResourceNotFoundException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'ExceptionMessage'], 'ResourceId' => ['shape' => 'NonEmptyString']], 'exception' => \true], 'ResourceUnavailableException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'ExceptionMessage'], 'ResourceId' => ['shape' => 'NonEmptyString']], 'exception' => \true], 'RevokeIpRulesRequest' => ['type' => 'structure', 'required' => ['GroupId', 'UserRules'], 'members' => ['GroupId' => ['shape' => 'IpGroupId'], 'UserRules' => ['shape' => 'IpRevokedRuleList']]], 'RevokeIpRulesResult' => ['type' => 'structure', 'members' => []], 'RootStorage' => ['type' => 'structure', 'members' => ['Capacity' => ['shape' => 'NonEmptyString']]], 'RootVolumeSizeGib' => ['type' => 'integer'], 'RunningMode' => ['type' => 'string', 'enum' => ['AUTO_STOP', 'ALWAYS_ON']], 'RunningModeAutoStopTimeoutInMinutes' => ['type' => 'integer'], 'SecurityGroupId' => ['type' => 'string', 'pattern' => '^(sg-[0-9a-f]{8})$'], 'StartRequest' => ['type' => 'structure', 'members' => ['WorkspaceId' => ['shape' => 'WorkspaceId']]], 'StartWorkspaceRequests' => ['type' => 'list', 'member' => ['shape' => 'StartRequest'], 'max' => 25, 'min' => 1], 'StartWorkspacesRequest' => ['type' => 'structure', 'required' => ['StartWorkspaceRequests'], 'members' => ['StartWorkspaceRequests' => ['shape' => 'StartWorkspaceRequests']]], 'StartWorkspacesResult' => ['type' => 'structure', 'members' => ['FailedRequests' => ['shape' => 'FailedStartWorkspaceRequests']]], 'StopRequest' => ['type' => 'structure', 'members' => ['WorkspaceId' => ['shape' => 'WorkspaceId']]], 'StopWorkspaceRequests' => ['type' => 'list', 'member' => ['shape' => 'StopRequest'], 'max' => 25, 'min' => 1], 'StopWorkspacesRequest' => ['type' => 'structure', 'required' => ['StopWorkspaceRequests'], 'members' => ['StopWorkspaceRequests' => ['shape' => 'StopWorkspaceRequests']]], 'StopWorkspacesResult' => ['type' => 'structure', 'members' => ['FailedRequests' => ['shape' => 'FailedStopWorkspaceRequests']]], 'SubnetId' => ['type' => 'string', 'pattern' => '^(subnet-[0-9a-f]{8})$'], 'SubnetIds' => ['type' => 'list', 'member' => ['shape' => 'SubnetId']], 'Tag' => ['type' => 'structure', 'required' => ['Key'], 'members' => ['Key' => ['shape' => 'TagKey'], 'Value' => ['shape' => 'TagValue']]], 'TagKey' => ['type' => 'string', 'max' => 127, 'min' => 1], 'TagKeyList' => ['type' => 'list', 'member' => ['shape' => 'NonEmptyString']], 'TagList' => ['type' => 'list', 'member' => ['shape' => 'Tag']], 'TagValue' => ['type' => 'string', 'max' => 255], 'TargetWorkspaceState' => ['type' => 'string', 'enum' => ['AVAILABLE', 'ADMIN_MAINTENANCE']], 'TerminateRequest' => ['type' => 'structure', 'required' => ['WorkspaceId'], 'members' => ['WorkspaceId' => ['shape' => 'WorkspaceId']]], 'TerminateWorkspaceRequests' => ['type' => 'list', 'member' => ['shape' => 'TerminateRequest'], 'max' => 25, 'min' => 1], 'TerminateWorkspacesRequest' => ['type' => 'structure', 'required' => ['TerminateWorkspaceRequests'], 'members' => ['TerminateWorkspaceRequests' => ['shape' => 'TerminateWorkspaceRequests']]], 'TerminateWorkspacesResult' => ['type' => 'structure', 'members' => ['FailedRequests' => ['shape' => 'FailedTerminateWorkspaceRequests']]], 'Timestamp' => ['type' => 'timestamp'], 'UnsupportedWorkspaceConfigurationException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'ExceptionMessage']], 'exception' => \true], 'UpdateRulesOfIpGroupRequest' => ['type' => 'structure', 'required' => ['GroupId', 'UserRules'], 'members' => ['GroupId' => ['shape' => 'IpGroupId'], 'UserRules' => ['shape' => 'IpRuleList']]], 'UpdateRulesOfIpGroupResult' => ['type' => 'structure', 'members' => []], 'UserName' => ['type' => 'string', 'max' => 63, 'min' => 1], 'UserStorage' => ['type' => 'structure', 'members' => ['Capacity' => ['shape' => 'NonEmptyString']]], 'UserVolumeSizeGib' => ['type' => 'integer'], 'VolumeEncryptionKey' => ['type' => 'string'], 'Workspace' => ['type' => 'structure', 'members' => ['WorkspaceId' => ['shape' => 'WorkspaceId'], 'DirectoryId' => ['shape' => 'DirectoryId'], 'UserName' => ['shape' => 'UserName'], 'IpAddress' => ['shape' => 'IpAddress'], 'State' => ['shape' => 'WorkspaceState'], 'BundleId' => ['shape' => 'BundleId'], 'SubnetId' => ['shape' => 'SubnetId'], 'ErrorMessage' => ['shape' => 'Description'], 'ErrorCode' => ['shape' => 'WorkspaceErrorCode'], 'ComputerName' => ['shape' => 'ComputerName'], 'VolumeEncryptionKey' => ['shape' => 'VolumeEncryptionKey'], 'UserVolumeEncryptionEnabled' => ['shape' => 'BooleanObject'], 'RootVolumeEncryptionEnabled' => ['shape' => 'BooleanObject'], 'WorkspaceProperties' => ['shape' => 'WorkspaceProperties'], 'ModificationStates' => ['shape' => 'ModificationStateList']]], 'WorkspaceBundle' => ['type' => 'structure', 'members' => ['BundleId' => ['shape' => 'BundleId'], 'Name' => ['shape' => 'NonEmptyString'], 'Owner' => ['shape' => 'BundleOwner'], 'Description' => ['shape' => 'Description'], 'RootStorage' => ['shape' => 'RootStorage'], 'UserStorage' => ['shape' => 'UserStorage'], 'ComputeType' => ['shape' => 'ComputeType']]], 'WorkspaceConnectionStatus' => ['type' => 'structure', 'members' => ['WorkspaceId' => ['shape' => 'WorkspaceId'], 'ConnectionState' => ['shape' => 'ConnectionState'], 'ConnectionStateCheckTimestamp' => ['shape' => 'Timestamp'], 'LastKnownUserConnectionTimestamp' => ['shape' => 'Timestamp']]], 'WorkspaceConnectionStatusList' => ['type' => 'list', 'member' => ['shape' => 'WorkspaceConnectionStatus']], 'WorkspaceDirectory' => ['type' => 'structure', 'members' => ['DirectoryId' => ['shape' => 'DirectoryId'], 'Alias' => ['shape' => 'Alias'], 'DirectoryName' => ['shape' => 'DirectoryName'], 'RegistrationCode' => ['shape' => 'RegistrationCode'], 'SubnetIds' => ['shape' => 'SubnetIds'], 'DnsIpAddresses' => ['shape' => 'DnsIpAddresses'], 'CustomerUserName' => ['shape' => 'UserName'], 'IamRoleId' => ['shape' => 'ARN'], 'DirectoryType' => ['shape' => 'WorkspaceDirectoryType'], 'WorkspaceSecurityGroupId' => ['shape' => 'SecurityGroupId'], 'State' => ['shape' => 'WorkspaceDirectoryState'], 'WorkspaceCreationProperties' => ['shape' => 'DefaultWorkspaceCreationProperties'], 'ipGroupIds' => ['shape' => 'IpGroupIdList']]], 'WorkspaceDirectoryState' => ['type' => 'string', 'enum' => ['REGISTERING', 'REGISTERED', 'DEREGISTERING', 'DEREGISTERED', 'ERROR']], 'WorkspaceDirectoryType' => ['type' => 'string', 'enum' => ['SIMPLE_AD', 'AD_CONNECTOR']], 'WorkspaceErrorCode' => ['type' => 'string'], 'WorkspaceId' => ['type' => 'string', 'pattern' => '^ws-[0-9a-z]{8,63}$'], 'WorkspaceIdList' => ['type' => 'list', 'member' => ['shape' => 'WorkspaceId'], 'max' => 25, 'min' => 1], 'WorkspaceImage' => ['type' => 'structure', 'members' => ['ImageId' => ['shape' => 'WorkspaceImageId'], 'Name' => ['shape' => 'WorkspaceImageName'], 'Description' => ['shape' => 'WorkspaceImageDescription'], 'OperatingSystem' => ['shape' => 'OperatingSystem'], 'State' => ['shape' => 'WorkspaceImageState'], 'RequiredTenancy' => ['shape' => 'WorkspaceImageRequiredTenancy'], 'ErrorCode' => ['shape' => 'WorkspaceImageErrorCode'], 'ErrorMessage' => ['shape' => 'Description']]], 'WorkspaceImageDescription' => ['type' => 'string', 'max' => 256, 'min' => 1, 'pattern' => '^[a-zA-Z0-9_./() -]+$'], 'WorkspaceImageErrorCode' => ['type' => 'string'], 'WorkspaceImageId' => ['type' => 'string', 'pattern' => 'wsi-[0-9a-z]{9,63}$'], 'WorkspaceImageIdList' => ['type' => 'list', 'member' => ['shape' => 'WorkspaceImageId'], 'max' => 25, 'min' => 1], 'WorkspaceImageIngestionProcess' => ['type' => 'string', 'enum' => ['BYOL_REGULAR', 'BYOL_GRAPHICS', 'BYOL_GRAPHICSPRO']], 'WorkspaceImageList' => ['type' => 'list', 'member' => ['shape' => 'WorkspaceImage']], 'WorkspaceImageName' => ['type' => 'string', 'max' => 64, 'min' => 1, 'pattern' => '^[a-zA-Z0-9_./()\\\\-]+$'], 'WorkspaceImageRequiredTenancy' => ['type' => 'string', 'enum' => ['DEFAULT', 'DEDICATED']], 'WorkspaceImageState' => ['type' => 'string', 'enum' => ['AVAILABLE', 'PENDING', 'ERROR']], 'WorkspaceList' => ['type' => 'list', 'member' => ['shape' => 'Workspace']], 'WorkspaceProperties' => ['type' => 'structure', 'members' => ['RunningMode' => ['shape' => 'RunningMode'], 'RunningModeAutoStopTimeoutInMinutes' => ['shape' => 'RunningModeAutoStopTimeoutInMinutes'], 'RootVolumeSizeGib' => ['shape' => 'RootVolumeSizeGib'], 'UserVolumeSizeGib' => ['shape' => 'UserVolumeSizeGib'], 'ComputeTypeName' => ['shape' => 'Compute']]], 'WorkspaceRequest' => ['type' => 'structure', 'required' => ['DirectoryId', 'UserName', 'BundleId'], 'members' => ['DirectoryId' => ['shape' => 'DirectoryId'], 'UserName' => ['shape' => 'UserName'], 'BundleId' => ['shape' => 'BundleId'], 'VolumeEncryptionKey' => ['shape' => 'VolumeEncryptionKey'], 'UserVolumeEncryptionEnabled' => ['shape' => 'BooleanObject'], 'RootVolumeEncryptionEnabled' => ['shape' => 'BooleanObject'], 'WorkspaceProperties' => ['shape' => 'WorkspaceProperties'], 'Tags' => ['shape' => 'TagList']]], 'WorkspaceRequestList' => ['type' => 'list', 'member' => ['shape' => 'WorkspaceRequest'], 'max' => 25, 'min' => 1], 'WorkspaceState' => ['type' => 'string', 'enum' => ['PENDING', 'AVAILABLE', 'IMPAIRED', 'UNHEALTHY', 'REBOOTING', 'STARTING', 'REBUILDING', 'MAINTENANCE', 'ADMIN_MAINTENANCE', 'TERMINATING', 'TERMINATED', 'SUSPENDED', 'UPDATING', 'STOPPING', 'STOPPED', 'ERROR']], 'WorkspacesIpGroup' => ['type' => 'structure', 'members' => ['groupId' => ['shape' => 'IpGroupId'], 'groupName' => ['shape' => 'IpGroupName'], 'groupDesc' => ['shape' => 'IpGroupDesc'], 'userRules' => ['shape' => 'IpRuleList']]], 'WorkspacesIpGroupsList' => ['type' => 'list', 'member' => ['shape' => 'WorkspacesIpGroup']]]];
