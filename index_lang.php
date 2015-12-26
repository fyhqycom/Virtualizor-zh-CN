<?php

//////////////////////////////////////////////////////////////
//===========================================================
// index_lang.php
//===========================================================
// SOFTACULOUS VIRTUALIZOR
// Version : 1.0
// Inspired by the DESIRE to be the BEST OF ALL
// ----------------------------------------------------------
// Started by: Alons
// Date:       8th Mar 2010
// Time:       23:00 hrs
// Site:       http://www.virtualizor.com/ (SOFTACULOUS VIRTUALIZOR)
// ----------------------------------------------------------
// Please Read the Terms of use at http://www.virtualizor.com
// ----------------------------------------------------------
//===========================================================
// (c)Softaculous Ltd.
//===========================================================
//////////////////////////////////////////////////////////////

if(!defined('VIRTUALIZOR')){

	die('Hacking Attempt');

}

$l['virt_openvz'] = 'OpenVZ';
$l['virt_xen'] = 'Xen';
$l['virt_xenhvm'] = 'Xen HVM';
$l['virt_kvm'] = 'KVM';
$l['virt_xcp'] = 'XCP';
$l['virt_xcphvm'] = 'XCP HVM';
$l['virt_lxc'] = 'LXC';

$l['user_data_error_t'] = '�û����ݴ���';
$l['user_data_error'] = '����޷����������ʻ���Ϣ���������������Ա���棡';

$l['no_license'] = '�Ҳ������֤�ļ��� �������������Ա���档';

$l['today'] = '<b>����</b> at ';//The today string for showing todays post time

$l['init_theme_error_t'] = '�������';//Title
$l['init_theme_error'] = '�޷����������ļ� - &soft-1;.';

$l['init_theme_func_error_t'] = '���⺯������';//Title
$l['init_theme_func_error'] = '�޷��������⺯��(s) of &soft-1;.';

$l['load_theme_settings_error'] = '�޷���������������ļ�.';


//Error Handle Function
$l['following_errors_occured'] = '�������´���';

//Success Message Function
$l['following_message'] = '����������Ϣ';

//Major Error Function
$l['fatal_error'] = '��������';
$l['following_fatal_error'] = '�������´���';

//Message Function
$l['soft_message'] = '��Ϣ';
$l['following_soft_message'] = '����������Ϣ';

$l['err_user_head'] = '����';
$l['err_user'] = '�޷�ȷ���û�������';

//Update Softaculous
$l['getting_info'] = '��Ϣ������......';
$l['error_getting_latest'] = '�޷���ȡ��Ϣ......������';
$l['got_info'] = '��ȡ����Ϣ';
$l['manual_mode'] = 'Softaculous���°汾��Ҫ�ֶ��Ĺ�ע......������';
$l['no_updates'] = '��ǰ�汾�����°汾......������';
$l['fetch_upgrade'] = '��ȡ������......';
$l['error_fetch_upgrade'] = '�޷���ȡ�����ļ�......������';
$l['error_save_upgrade'] = '�޷����������ļ�......������';
$l['got_upgrade'] = '�ѱ��������ļ�';
$l['unzip_upgrade'] = '��ѹ���ļ���......';
$l['error_unzip_upgrade'] = '��ѹ������......������';
$l['unzipped_upgrade'] = '��ѹ���ɹ�';
$l['running_upgrade'] = '����������......';
$l['succ_upgrade'] = '�����';
$l['error_upgrade'] = '����ʱ�������´��� :';

//MySQL Errors
$l['err_selectmy'] = '�޷�ѡ��MySQL���ݿ⡣';
$l['err_myconn'] = 'MySQL�޷���������.';
$l['err_makequery'] = 'Could not make the query numbered';
$l['err_mynum'] = 'MySQL Error No';
$l['err_myerr'] = 'MySQL Error';

//hf_theme.php
$l['welcome'] = '��ӭ';
$l['logout'] = '�ǳ�';
$l['page_time'] = 'Page Created In';
$l['times_are'] = 'All times are GMT';
$l['time_is'] = 'The time now is';
$l['load_start'] = 'Starting';
$l['load_stop'] = 'Stopping';
$l['load_restart'] = 'Restarting';
$l['load_poweroff'] = 'Powering Off';

//The Category Language Variables
$l['dock_restart'] = 'Restart Container';
$l['dock_stop'] = 'Stop Container';
$l['dock_start'] = 'Start Container';
$l['dock_poweroff'] = 'Poweroff Container';
$l['dock_home'] = 'Home';
$l['dock_settings'] = 'Edit Settings';
$l['dock_help'] = 'Help and Support';
$l['dock_sync'] = 'Synchronize with other Auto Installers';
$l['go_home'] = 'Home';
$l['dock_user'] = 'User Profile';
$l['dock_password'] = 'Change Password';
$l['dock_vps'] = 'List Virtual Servers';

// Left Menu
$l['lm_file_mgr'] = 'File Manager';
$l['lm_res'] = 'Resources';
$l['lm_performance'] = 'Performance';
$l['lm_process'] = 'Processes';
$l['lm_service'] = 'Services';
$l['lm_firewall'] = 'Firewall';
$l['lm_ssh'] = 'SSH';
$l['lm_vnc'] = 'VNC';
$l['lm_vncpass'] = 'VNC Password';
$l['lm_statusc'] = 'Status Logs';
$l['lm_res_a'] = 'System Alerts';
$l['lm_logs'] = 'Task Logs';
$l['lm_bandwidth'] = 'Bandwidth';
$l['lm_accountpass'] = 'Account Password';
$l['lm_changepass'] = 'Account Password';
$l['lm_controlpanel'] = 'Control Panel';
$l['lm_recipes'] = 'Recipes';
$l['lm_disk'] = 'Disk';
$l['lm_backup'] = 'Backup';
$l['lm_ostemp'] ='OS Re-install';
$l['lm_cpu'] = 'CPU';
$l['lm_ram'] = 'RAM';
$l['lm_host'] = 'Hostname';
$l['lm_logs'] = 'Logs';
$l['lm_ips'] = 'IPs';
$l['lm_backup'] = 'Backups';
$l['lm_hvmsettings'] = 'VPS Configuration';
$l['lm_apikey'] = 'API Credentials';
$l['lm_pdns'] = 'DNS';
$l['lm_rdns'] = 'Reverse DNS';
$l['lm_support'] = 'Support';

// Users left menu
$l['lm_vs'] = 'List VPS';
$l['lm_addvs'] = 'Launch Instance';
$l['lm_resources'] = 'Cloud Resources';
$l['lm_users'] = 'Users';
$l['lm_usr_settings'] = 'Settings';
$l['lm_profile'] = 'My Profile';
$l['you_are_admin'] = 'You are an Admin';

// Page Jump Related :
$l['page_jump_title'] = 'Type the page to jump to';
$l['page_page'] = 'Page';
$l['page_of'] = 'of';
$l['page_go'] = 'Go';

// Create VPS related for Kernel
$l['build_no_vs'] = 'The VPS was not found in the Database';
$l['build_no_os'] = 'The OS Template was not found';
$l['build_no_ip'] = 'The Primary IP is missing for the VPS';
$l['build_no_os_iso'] = 'No OS Template or ISO file was found';

// Wrong and Right Kernel
$l['wrong_kernel'] = 'You have booted into the wrong kernel - ';
$l['correct_kernel'] = 'Please reboot into the correct kernel.';
$l['kvm_module'] = 'The Linux-KVM module is not loaded.';
$l['kvm_network'] = 'The '.$globals['bridge'].' is not started. Please run <b>service virtnetwork start</b>';
$l['temp_exists'] = 'The Template file already exists';
$l['temp_snap_err'] = 'The Snapshot could not be created and hence the template creation failed. The snapshot creation generally fails because of less space';
$l['wrong_xm'] = 'The XEN module is not loaded correctly';

// Xen VPS Creation errors
$l['xen_err_lvm'] = 'There was an error creating the LVM of the VPS';
$l['xen_err_swap'] = 'There was an error in creating the SWAP of the VPS';
$l['xen_err_tmp'] = 'The was an error in creating the Mount Point';
$l['xen_err_mount'] = 'There was an error in mounting the VPS LVM';
$l['xen_err_unmount'] = 'There was an error in unmounting the VPS LVM';
$l['xen_err_dd'] = 'There was an error during the disk copy operation';
$l['xen_err_mkfs'] = 'There was an error while formatting the VPS';
$l['xen_err_mkswap'] = 'There was an error while formatting the SWAP of the VPS';
$l['xen_err_untar'] = 'There was an error while extracting the OS template';
$l['xen_err_part'] = 'There was an error while creating the disk partition(s)';
$l['xen_err_kpart'] = 'There was an error while mapping the partition(s)';
$l['xen_err_resizefs'] = 'There was an error while resizing the filesystem';

// XCP VPS Creation errors
$l['xcp_err_vdi'] = 'There was an error while creating the VDI of the VM';
$l['xcp_err_iso'] = 'There was an error while loading the ISO';
$l['xcp_err_vif'] = 'There was an error while creating VIF for the VPS';

// KVM VPS Creation errors
$l['kvm_err_lvm'] = 'There was an error creating the LVM of the VPS';
$l['kvm_err_mount'] = 'There was an error in mounting the VPS LVM';
$l['kvm_err_unmount'] = 'There was an error in unmounting the VPS LVM';
$l['kvm_err_dd'] = 'There was an error during the disk copy operation';
$l['kvm_err_resizefs'] = 'There was an error while resizing the filesystem'	;
$l['kvm_err_part'] = 'There was an error while creating the disk partition(s)';
$l['kvm_err_kpart'] = 'There was an error while mapping the partition(s)';
$l['kvm_err_mkswap'] = 'There was an error while formatting the SWAP of the VPS';

//Backup errors
$l['backup_err_mount'] = 'There was an error in mounting the LVM for temporary storage';
$l['backup_err_lvm'] = 'There was an error creating the LVM of the for temporary storage.';
$l['backup_err_mkfs'] = 'There was an error while formatting the temporary storage';
$l['backup_err_mkdir'] = 'There was an error while creating the temporary storage mount point directory';
$l['kvm_err_tar'] = 'There was an error while compressing the archive';
$l['xen_err_tar'] = 'There was an error while compressing the archive';
$l['kvm_err_untar'] = 'There was an error while uncompressing the archive';
$l['backup_err_untar'] = 'There was an error while uncompressing the archive';
$l['err_vzdump'] = 'There was an error with the backup tool';
$l['err_create_backup_folder'] = 'There was an error while creating the backup start directory';
$l['err_create_backup_date_folder'] = 'There was an error while creating the backup directory';

// OpenVZ VPS Creation errors
$l['openvz_err_ubc'] = 'There was an error saving the UBC settings';
$l['openvz_err_ostemplate'] = 'There was an error setting the OS Template';
$l['openvz_err_space'] = 'There was an error setting the disk space';
$l['openvz_err_inodes'] = 'There was an error setting the disk space';
$l['openvz_err_hostname'] = 'There was an error setting the hostname';
$l['openvz_err_ip'] = 'There was an error setting the IP Address';
$l['openvz_err_dns'] = 'There was an error setting the DNS';
$l['openvz_err_cpu'] = 'There was an error setting the CPU units';
$l['openvz_err_cpulim'] =  'There was an error setting the CPU limit';
$l['openvz_err_cores'] = 'There was an error setting the CPU cores';
$l['openvz_err_ioprio'] = 'There was an error setting the IO Priority';
$l['openvz_err_create'] = 'There was an error creating the container';
$l['vswap_error'] = 'There was an error while setting the VSwap settings';

// Rescue Disk Errors
$l['err_downloading'] = 'There was an error downloading the rescue template';
$l['err_delete_disk'] = 'There was an error while deleting the rescue disk';

// Enduser VPS status column
$l['lm_status_online'] = 'Online';
$l['lm_status_offline'] = 'Offline';
$l['lm_status_suspended'] = 'Suspended';
$l['vps_is_suspended'] = 'This VPS is suspended. You cannot perform any operations for the VPS !';
$l['suspend_reason_bw'] = 'This VPS is suspended due to Bandwidth Over Usage. You cannot perform any operations for the VPS !';

$l['unknown'] = 'Unknown';
$l['bandwidth_mail_sub'] = 'VPS Suspended due to Bandwidth Overuse';
$l['bandwidth_mail_message'] = 'Hi,

Your VPS `{{hostname}}` has been suspended because it has overused its assigned bandwidth limit.

The VPS has used {{used_gb}} GB of bandwidth but it was allowed only {{limit_gb}} GB. 

Regards,
{{sn}}';

?>