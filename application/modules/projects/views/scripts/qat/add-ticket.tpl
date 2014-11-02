{flash}
<div class="midline_con">
	<div class="midline_con_top">
		&nbsp;
	</div>
	<div class="midline_con_mid">
		<table class="table5" cellspacing="0">
	    	<tr>
	        	<td>
	            	<div class="horlinefade1">	
	                	&nbsp;
	                </div>
	            	<table>
	                	<tr>
	                    	<td>
	                        	<img src="../../../../images/icon_folder.jpg" border="0" />
	                        </td>
	                        <td>
	                        	<span class="textstyle3">{$description}</span>
	                        </td>
	                    </tr>
	                </table>
	                <div class="horlinefade1">	
	                	&nbsp;
	                </div>
	            </td>
	        </tr>
	        <tr>
	        	<td class="table5_td1">
	            	Detailed information regarding your review on this page is explained below.
	            </td>
	        </tr>
	        <tr>
	        	<td>
	            	<div class="tablecon1">
	                    <table class="table4" cellspacing="0">
	                        <tr>
	                            <td class="table4_td1" colspan="2">
	                                <span class="textstyle1">General Review Information</span>
	                            </td>
	                        </tr>
	                        <tr>
	                            <td class="table4_td3a" colspan="2">
	                        		<div class="horlinefade1">	
	                					&nbsp;
	               					</div>
	                                <table>
	                                	<tr>
	                                    	<td>
	                                			<span class="textstyle10">Review Info</span>
	                                		</td>
	                                	</tr>
	                                </table>
	                                <div class="horlinefade1">	
	                					&nbsp;
	               					</div>
	                            </td>
	                        </tr>
	                        <tr>
	                            <td width="125" class="table4_td2a">
	                            	Title                                           </td>
	                          <td width="722" class="table4_td2a">
	                            	{$qat.page}
	                            </td>
	                      </tr>
	                        <tr>
	                            <td class="table4_td3a">
	                            	Location
	                            </td>
	                            <td class="table4_td3a">
	                                {$qat.url}
	                            </td>
	                        </tr>
	                         <tr>
	                            <td class="table4_td3a">
	                            	Procedure
	                            </td>
	                            <td class="table4_td3a">
	                                {$qat.description}
	                            </td>
	                        </tr>
	                         <tr>
	                            <td class="table4_td3a">
	                            	Purpose
	                            </td>
	                            <td class="table4_td3a">
	                               {$qat.remarks}
	                            </td>
	                        </tr>
	                        <tr>
	                            <td class="table4_td3a" colspan="2">
	                                <div class="horlinefade1">	
	                					&nbsp;
	               					</div>
	                                <table>
	                                	<tr>
	                                    	<td>
	                                			<span class="textstyle10">Issue Tickets for Failed Review Results</span>
	                                		</td>
	                                	</tr>
	                                </table>
	                                <div class="horlinefade1">	
	                					&nbsp;
	               					</div>
	                            </td>
	                        </tr>
	                        <tr>
	                            <td class="table4_td2a" colspan="2">
	                            
	                            {if $qat.layout == 2 && $setticket == 0}
	                            {form}
	                            	<table width="100%" class="table6">	
	                            		<tr>
	                            			<td colspan="4"><span class="textstyle4">Layout Ticket</span></td>
	                            		</tr>                            	
	                                	<tr>	                                		       
	                                		<td colspan="2" class="table4_td1"><span class="textstyle1">Error Description</span></td>
	                                		<td colspan="2" class="table4_td1"><span class="textstyle1">Suggested Fix</span></td> 
	                                	</tr>	                                
	                                	<tr>	                                		
	                                		<td colspan="2" class="table4_td2row1">{form_textarea name="message" cols="40" rows="3"}</td>
	                                		<td colspan="2" class="table4_td2row1">{form_textarea name="instructions" cols="40" rows="3"}</td>	                                		
	                        	                                		
	                                </table>
	                                {form_hidden name=tab value="layout"}
	                                {form_hidden name="form_id" value=$qat.form_id}
	                                {form_hidden name="user_id" value=$project.project_developer}{form_hidden name="page" value=$qat.page}
	                                {form_hidden name="page_url" value=$qat.location}
	                                {form_hidden name="status" value=0}
	                                {form_hidden name="priority" value=5}
	                                {form_submit name="submit" class="botton" value="   Submit   " no_div=true} or 
    								{link_to href="/admin/projects/list" confirm="Are you sure you want to cancel?"}cancel{/link_to}
	                            {/form}	<br /><br /><br />
	                            {/if}   
	                            
	                            {if $qat.rollover == 2 && $setticket == 0}
	                            {form}
	                            	<table width="100%" class="table6">	
	                            		<tr>
	                            			<td colspan="4"><span class="textstyle4">Rollover Ticket</span></td>
	                            		</tr>                            	
	                                	<tr>	                                		       
	                                		<td colspan="2" class="table4_td1"><span class="textstyle1">Error Description</span></td>
	                                		<td colspan="2" class="table4_td1"><span class="textstyle1">Suggested Fix</span></td> 
	                                	</tr>	                                
	                                	<tr>	                                		
	                                		<td colspan="2" class="table4_td2row1">{form_textarea name="message" cols="40" rows="3"}</td>
	                                		<td colspan="2" class="table4_td2row1">{form_textarea name="instructions" cols="40" rows="3"}</td>	                                		
	                        	                                		
	                                </table>
	                                {form_hidden name=tab value="rollover"}
	                                {form_hidden name="form_id" value=$qat.form_id}
	                                {form_hidden name="user_id" value=$project.project_developer}{form_hidden name="page" value=$qat.page}
	                                {form_hidden name="page_url" value=$qat.location}
	                                {form_hidden name="status" value=0}
	                                {form_hidden name="priority" value=5}
	                                {form_submit name="submit" class="botton" value="   Submit   " no_div=true} or 
    								{link_to href="/admin/projects/list" confirm="Are you sure you want to cancel?"}cancel{/link_to}
	                            {/form}	<br /><br /><br />
	                            {/if}
	                            
	                            {if $qat.animation == 2 && $setticket == 0}
	                            {form}
	                            	<table width="100%" class="table6">	
	                            		<tr>
	                            			<td colspan="4"><span class="textstyle4">Animation Ticket</span></td>
	                            		</tr>                            	
	                                	<tr>	                                		       
	                                		<td colspan="2" class="table4_td1"><span class="textstyle1">Error Description</span></td>
	                                		<td colspan="2" class="table4_td1"><span class="textstyle1">Suggested Fix</span></td> 
	                                	</tr>	                                
	                                	<tr>	                                		
	                                		<td colspan="2" class="table4_td2row1">{form_textarea name="message" cols="40" rows="3"}</td>
	                                		<td colspan="2" class="table4_td2row1">{form_textarea name="instructions" cols="40" rows="3"}</td>	                                		
	                        	                                		
	                                </table>
	                                {form_hidden name=tab value="animation"}
	                                {form_hidden name="form_id" value=$qat.form_id}
	                                {form_hidden name="user_id" value=$project.project_developer}
	                                {form_hidden name="page" value=$qat.page}
	                                {form_hidden name="page_url" value=$qat.location}
	                                {form_hidden name="status" value=0}
	                                {form_hidden name="priority" value=5}
	                                {form_submit name="submit" class="botton" value="   Submit   " no_div=true} or 
    								{link_to href="/admin/projects/list" confirm="Are you sure you want to cancel?"}cancel{/link_to}
	                            {/form}	<br /><br /><br />
	                            {/if}
	                            
	                            {if $qat.forms == 2 && $setticket == 0}
	                            {form}
	                            	<table width="100%" class="table6">	
	                            		<tr>
	                            			<td colspan="4"><span class="textstyle4">Forms Ticket</span></td>
	                            		</tr>                            	
	                                	<tr>	                                		       
	                                		<td colspan="2" class="table4_td1"><span class="textstyle1">Error Description</span></td>
	                                		<td colspan="2" class="table4_td1"><span class="textstyle1">Suggested Fix</span></td> 
	                                	</tr>	                                
	                                	<tr>	                                		
	                                		<td colspan="2" class="table4_td2row1">{form_textarea name="message" cols="40" rows="3"}</td>
	                                		<td colspan="2" class="table4_td2row1">{form_textarea name="instructions" cols="40" rows="3"}</td>	                                		
	                        	                                		
	                                </table>
	                                {form_hidden name=tab value="forms"}
	                                {form_hidden name="form_id" value=$qat.form_id}
	                                {form_hidden name="user_id" value=$project.project_developer}{form_hidden name="page" value=$qat.page}
	                                {form_hidden name="page_url" value=$qat.location}
	                                {form_hidden name="status" value=0}
	                                {form_hidden name="priority" value=5}
	                                {form_submit name="submit" class="botton" value="   Submit   " no_div=true} or 
    								{link_to href="/admin/projects/list" confirm="Are you sure you want to cancel?"}cancel{/link_to}
	                            {/form}	<br /><br /><br />
	                            {/if}
	                            
	                            {if $qat.link == 2 && $setticket == 0}
	                            {form}
	                            	<table width="100%" class="table6">	
	                            		<tr>
	                            			<td colspan="4"><span class="textstyle4">Linkage Ticket</span></td>
	                            		</tr>                            	
	                                	<tr>	                                		       
	                                		<td colspan="2" class="table4_td1"><span class="textstyle1">Error Description</span></td>
	                                		<td colspan="2" class="table4_td1"><span class="textstyle1">Suggested Fix</span></td> 
	                                	</tr>	                                
	                                	<tr>	                                		
	                                		<td colspan="2" class="table4_td2row1">{form_textarea name="message" cols="40" rows="3"}</td>
	                                		<td colspan="2" class="table4_td2row1">{form_textarea name="instructions" cols="40" rows="3"}</td>	                                		
	                        	                                		
	                                </table>
	                                {form_hidden name=tab value="link"}
	                                {form_hidden name="form_id" value=$qat.form_id}
	                                {form_hidden name="user_id" value=$project.project_developer}{form_hidden name="page" value=$qat.page}
	                                {form_hidden name="page_url" value=$qat.location}
	                                {form_hidden name="status" value=0}
	                                {form_hidden name="priority" value=5}
	                                {form_submit name="submit" class="botton" value="   Submit   " no_div=true} or 
    								{link_to href="/admin/projects/list" confirm="Are you sure you want to cancel?"}cancel{/link_to}
	                            {/form}	<br /><br /><br />
	                            {/if}
	                            
	                            {if $qat.source == 2 && $setticket == 0}
	                            {form}
	                            	<table width="100%" class="table6">	
	                            		<tr>
	                            			<td colspan="4"><span class="textstyle4">Code Review Ticket</span></td>
	                            		</tr>                            	
	                                	<tr>	                                		       
	                                		<td colspan="2" class="table4_td1"><span class="textstyle1">Error Description</span></td>
	                                		<td colspan="2" class="table4_td1"><span class="textstyle1">Suggested Fix</span></td> 
	                                	</tr>	                                
	                                	<tr>	                                		
	                                		<td colspan="2" class="table4_td2row1">{form_textarea name="message" cols="40" rows="3"}</td>
	                                		<td colspan="2" class="table4_td2row1">{form_textarea name="instructions" cols="40" rows="3"}</td>	                                		
	                        	                                		
	                                </table>
	                                {form_hidden name=tab value="source"}
	                                {form_hidden name="form_id" value=$qat.form_id}
	                                {form_hidden name="user_id" value=$project.project_developer}{form_hidden name="page" value=$qat.page}
	                                {form_hidden name="page_url" value=$qat.location}
	                                {form_hidden name="status" value=0}
	                                {form_hidden name="priority" value=5}
	                                {form_submit name="submit" class="botton" value="   Submit   " no_div=true} or 
    								{link_to href="/admin/projects/list" confirm="Are you sure you want to cancel?"}cancel{/link_to}
	                            {/form}	<br /><br /><br />
	                            {/if}
	                            
	                            {if $qat.action == 2 && $setticket == 0}
	                            {form}
	                            	<table width="100%" class="table6">	
	                            		<tr>
	                            			<td colspan="4"><span class="textstyle4">Action Ticket</span></td>
	                            		</tr>                            	
	                                	<tr>	                                		       
	                                		<td colspan="2" class="table4_td1"><span class="textstyle1">Error Description</span></td>
	                                		<td colspan="2" class="table4_td1"><span class="textstyle1">Suggested Fix</span></td> 
	                                	</tr>	                                
	                                	<tr>	                                		
	                                		<td colspan="2" class="table4_td2row1">{form_textarea name="message" cols="40" rows="3"}</td>
	                                		<td colspan="2" class="table4_td2row1">{form_textarea name="instructions" cols="40" rows="3"}</td>	                                		
	                        	                                		
	                                </table>
	                                {form_hidden name=tab value="action"}
	                                {form_hidden name="form_id" value=$qat.form_id}
	                                {form_hidden name="user_id" value=$project.project_developer}{form_hidden name="page" value=$qat.page}
	                                {form_hidden name="page_url" value=$qat.location}
	                                {form_hidden name="status" value=0}
	                                {form_hidden name="priority" value=5}
	                                {form_submit name="submit" class="botton" value="   Submit   " no_div=true} or 
    								{link_to href="/admin/projects/list" confirm="Are you sure you want to cancel?"}cancel{/link_to}
	                            {/form}	<br /><br /><br />
	                            {/if}
	                            
	                            {if $qat.validation == 2 && $setticket == 0}
	                            {form}
	                            	<table width="100%" class="table6">	
	                            		<tr>
	                            			<td colspan="4"><span class="textstyle4">Validation Ticket</span></td>
	                            		</tr>                            	
	                                	<tr>	                                		       
	                                		<td colspan="2" class="table4_td1"><span class="textstyle1">Error Description</span></td>
	                                		<td colspan="2" class="table4_td1"><span class="textstyle1">Suggested Fix</span></td> 
	                                	</tr>	                                
	                                	<tr>	                                		
	                                		<td colspan="2" class="table4_td2row1">{form_textarea name="message" cols="40" rows="3"}</td>
	                                		<td colspan="2" class="table4_td2row1">{form_textarea name="instructions" cols="40" rows="3"}</td>	                                		
	                        	                                		
	                                </table>
	                                {form_hidden name=tab value="validation"}
	                                {form_hidden name="form_id" value=$qat.form_id}
	                                {form_hidden name="user_id" value=$project.project_developer}{form_hidden name="page" value=$qat.page}
	                                {form_hidden name="page_url" value=$qat.location}
	                                {form_hidden name="status" value=0}
	                                {form_hidden name="priority" value=5}
	                                {form_submit name="submit" class="botton" value="   Submit   " no_div=true} or 
    								{link_to href="/admin/projects/list" confirm="Are you sure you want to cancel?"}cancel{/link_to}
	                            {/form}	<br /><br /><br />
	                            {/if}
	                            
	                            {if $qat.layout > 2 || $qat.rollover > 2 || $qat.animation > 2 || $qat.forms > 2 || $qat.link > 2 || $qat.source > 2 || $qat.action > 2 || $qat.validation > 2}
	                            <table width="100%" class="table6">	
	                            		<tr>
	                            			<td colspan="4">No tickets to Issue</td>
	                            		</tr>                  		
	                                </table>
	                                  
	                            </td>
	                            {/if}
	                      </tr>                        
	                        
	                    </table>
	                </div>
	                
	            </td>
	        </tr>
	    </table>	 
	      
	</div>
	<div class="midline_con_bot">
		&nbsp;
	</div>
</div>